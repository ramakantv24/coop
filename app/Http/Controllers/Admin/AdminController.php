<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use URL;
use App;
use DB;
use Auth;
use PDF;
use Illuminate\Support\Str;
use file;
use App\Models\User;
use App\Models\Loan;
use App\Models\Course;
use App\Models\Coursechapter;
use App\Models\Coursepurchase;
use App\Models\Loanfile;
use App\Models\Loanpurchase;
use App\Models\Setting;
use App\Models\Testimonial;
use Mail;
use Illuminate\Pagination\Paginator;

class AdminController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index(){
		
        return view('admin.dashboard');
    }	
	
	public function profile(){ 
        
		$profileInfo = Auth::user();
        return view('admin.profile',compact('profileInfo'));
    }
	
	public function update_profile(Request $request){
		
		$dataArray = array();
		
		$dataArray['name']  = $request->name;
		$dataArray['email'] = $request->email;
		
		User::where('id',Auth::user()->id)->where('role','admin')->update($dataArray);
		return redirect('/admin/profile')->with('success', 'Your profile has been updated successfully!');
	}
	
	#Change Password
	public function change_password(){ 
       
        return view('admin.change_password');
    }
	
	public function change_password_action(Request $request){ 
        
		$request->validate([
            'password'         => ['required', 'string', 'min:8', 'confirmed'],
        ]);
		
		$dataArray = array();
		$dataArray['password']    	= Hash::make($request->password);
		
		$user_id = Auth::user()->id;
		
        User::where('id',$user_id)->update($dataArray);
        return redirect('/admin/change-password')->with('success', 'You have successfully updated!');
    }
	
	
	#cooperative
	public function all_cooperative(Request $request){ 
      
        $User = User::query();
		
      	if ($request->start_date && $request->end_date) {
			$start_date = $request->start_date;
			$end_date 	= $request->end_date;
			$User->whereBetween('created_at',[$start_date,$end_date]);
		}
      
        $users = $User->whereIn('role',array('cooperative'))->orderBy('id', 'DESC')->paginate(20);
      
        return view('admin.cooperative.users',compact('users'));
    }
  
	public function add_cooperative(){ 
        return view('admin.cooperative.add_user');
    }
	
	public function add_cooperative_action(Request $request){ 
        
		$request->validate([
            'name'             => ['required', 'string', 'max:255'],
            'email'            => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile_no'        => ['required'],
            'password'         => ['required', 'string', 'min:8', 'confirmed'],
			//'profile_picture'  => 'image|mimes:jpg,png,jpeg,gif,svg',
        ]);
		
				
		/* if(isset($request->profile_picture)){
		    $imageName = time().'.'.$request->profile_picture->extension();  
            $request->profile_picture->move(public_path('uploads/user/'), $imageName);
		}else{
			$imageName = '';
		} */
		
		$User 									= new User;
		$User->name           					= $request->name;
		$User->role           					= $request->role;
		$User->email           					= $request->email;
		$User->mobile_no           				= $request->mobile_no;
		$User->location           				= $request->location;
		$User->society_details           		= $request->society_details;
        $User->society_number           		= $request->society_number;
        $User->registration_number           	= $request->registration_number;
		$User->password           				= Hash::make($request->password);
		$User->save();		
		
		return redirect('/admin/cooperative')->with('success', 'You have successfully added!');
    }
	
	public function edit_cooperative($user_id){
		
		$userInfo = User::where('id',$user_id)->first();
        return view('admin.cooperative.edit_user',compact('userInfo'));
    }
	
	public function edit_cooperative_action(Request $request){
		
		$dataArray = array();
		$dataArray['name']    			= $request->name;
		$dataArray['email']   			= $request->email;
		$dataArray['mobile_no'] 		= $request->mobile_no;
		$dataArray['location'] 			= $request->location;
		$dataArray['society_details'] 	= $request->society_details;
        $dataArray['society_number'] 	= $request->society_number;
        $dataArray['registration_number'] 	= $request->registration_number;
		
		/* if(isset($request->profile_picture)){
			
			$userInfo = User::where('id',$request->user_id)->first();
			if(!empty($userInfo->profile_pic)){
				$getFilePath = public_path('uploads/features/').$userInfo->profile_pic;
				if(file_exists($getFilePath)){
					unlink($getFilePath);
				}
			}
		    $imageName = time().'.'.$request->profile_picture->extension();  
            $request->profile_picture->move(public_path('uploads/user/'), $imageName);
			$dataArray['profile_pic']  = $imageName;
		} */

		User::where('id',$request->user_id)->update($dataArray);
		
		
		/* $to      = $request->email;
        $subject = 'Cooperative Update Account';
        $message = 'name - '.$request->name;
        $message .= 'email - '.$request->email;
        $message .= 'mobile_no - '.$request->mobile_no;
        $message .= 'location - '.$request->location;
        $message .= 'society_details - '.$request->society_details;
        $headers = 'From: thecooperativestrust@gmail.com' . "\r\n" .
                     'Reply-To: thecooperativestrust@gmail.com' . "\r\n" .
                     'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $message, $headers); */
		
        return redirect('/admin/cooperative')->with('success', 'You have successfully updated!');
    }
	
	public function delete_cooperative($user_id){
		
		$unserInfo = User::where('id',$user_id)->first();
		if(!empty($unserInfo->image)){
			$getFilePath = public_path('uploads/user/').$unserInfo->image;
			if(file_exists($getFilePath)){
				unlink($getFilePath);
			}
		}
		User::where('id',$user_id)->delete();
        return redirect('/admin/cooperative')->with('success', 'You have successfully deleted!');
    }
	
	
	#Users
	public function all_users (){ 

		$users = User::whereIn('role',array('customer'))->orderBy('id', 'desc')->paginate(20);
        return view('admin.user.users',compact('users'));
    }
	
	public function add_user(){ 
        return view('admin.user.add_user');
    }
	
	public function add_user_action(Request $request){ 
        
		$request->validate([
            'name'             => ['required', 'string', 'max:255'],
            'email'            => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile_no'        => ['required'],
            'password'         => ['required', 'string', 'min:8', 'confirmed'],
			//'profile_picture'  => 'image|mimes:jpg,png,jpeg,gif,svg',
        ]);
		
		/* if(isset($request->profile_picture)){
		    $imageName = time().'.'.$request->profile_picture->extension();  
            $request->profile_picture->move(public_path('uploads/user/'), $imageName);
		}else{
			$imageName = '';
		} */
		
		$User 									= new User;
		$User->name           					= $request->name;
		$User->role           					= 'customer';
		$User->email           					= $request->email;
		$User->mobile_no           				= $request->mobile_no;
		$User->password           				= Hash::make($request->password);
		$User->save();		
		
		
		return redirect('/admin/users')->with('success', 'You have successfully added!');
    }
	
	public function edit_user($user_id){
		
		$userInfo = User::where('id',$user_id)->first();
        return view('admin.user.edit_user',compact('userInfo'));
    }
	
	public function edit_user_action(Request $request){
		
		$dataArray = array();
		$dataArray['name']    			= $request->name;
		$dataArray['email']   			= $request->email;
		$dataArray['mobile_no'] 		= $request->mobile_no;
		//$dataArray['role']    			= $request->role;
		
		/* if(isset($request->profile_picture)){
			
			$userInfo = User::where('id',$request->user_id)->first();
			if(!empty($userInfo->profile_pic)){
				$getFilePath = public_path('uploads/features/').$userInfo->profile_pic;
				if(file_exists($getFilePath)){
					unlink($getFilePath);
				}
			}
		    $imageName = time().'.'.$request->profile_picture->extension();  
            $request->profile_picture->move(public_path('uploads/user/'), $imageName);
			$dataArray['profile_pic']  = $imageName;
		} */

		User::where('id',$request->user_id)->update($dataArray);
		
		
        return redirect('/admin/users')->with('success', 'You have successfully updated!');
    }
	
	public function delete_user($user_id){
		
		$unserInfo = User::where('id',$user_id)->first();
		if(!empty($unserInfo->image)){
			$getFilePath = public_path('uploads/user/').$unserInfo->image;
			if(file_exists($getFilePath)){
				unlink($getFilePath);
			}
		}
		User::where('id',$user_id)->delete();
        return redirect('/admin/users')->with('success', 'You have successfully deleted!');
    }
	
	#loan
	public function all_loan(Request $request){
		
		//$loanlist = Loan::select('loan.*','users.name as user_name')->leftJoin('users','users.id','=','loan.user_id')->orderBy('id', 'desc')->paginate(20);
        
		$Loan = Loan::query();
		$Loan = $Loan->select('loan.*','users.mobile_no as user_mobile_no')->leftJoin('users','users.society_number','=','loan.society_number');
      
      	if ($request->start_date && $request->end_date) {
			$start_date = $request->start_date;
			$end_date 	= $request->end_date;
			$Loan->whereBetween('loan.created_at',[$start_date,$end_date]);
		}
      
      	if ($request->status) {			
			$Loan = $Loan->where('loan.status', $request->status);
		}      
      	
      	if ($request->pan_no) {			
			$Loan = $Loan->where('loan.pan_no', $request->pan_no);
		}
      	if ($request->aadhaar_no) {			
			$Loan = $Loan->where('loan.aadhaar_no', $request->aadhaar_no);
		}
      	
        $loanlist = $Loan->orderBy('loan.id', 'DESC')->paginate(20);  
        
        
      
      return view('admin.loan.list',compact('loanlist'));
    }
	public function add_loan(){ 
		
        return view('admin.loan.add');
    }
	
	public function add_loan_action(Request $request){
		
		$request->validate([
            'loan_type'          => ['required'],
            
        ]);	
		
		$Loan 									= new Loan;		
		$Loan->user_id           				= Auth::user()->id;
        $Loan->no_of_months_due           		= $request->no_of_months_due;
        $Loan->society_number           		= $request->society_number;
		$Loan->loan_type           				= $request->loan_type;
		$Loan->loan_amount           			= $request->loan_amount;
		$Loan->loan_date           				= $request->loan_date;
		$Loan->loan_balance_amount           	= $request->loan_balance_amount;
		$Loan->loan_balance_as_date           	= $request->loan_balance_as_date;
		$Loan->loan_status           			= $request->loan_status; 
        $Loan->loan_account_number           	= $request->loan_account_number;
		$Loan->name           					= $request->name;
		$Loan->dob           					= $request->dob;
		$Loan->gender           				= $request->gender;
		$Loan->pan_no           				= $request->pan_no;
		$Loan->aadhaar_no           			= $request->aadhaar_no;
		$Loan->mobile_no           				= $request->mobile_no;
		$Loan->address           				= $request->address;
		$Loan->pin_code           				= $request->pin_code;
		$Loan->city           					= $request->city;
		$Loan->taluka           				= $request->taluka;
		$Loan->district           				= $request->district;
		$Loan->state           					= $request->state;
		$Loan->coborrower_name           		= $request->coborrower_name;
		$Loan->coborrower_dob           		= $request->coborrower_dob;
		$Loan->coborrower_gender           		= $request->coborrower_gender;
		$Loan->coborrower_pan_no           		= $request->coborrower_pan_no;
		$Loan->coborrower_aadhaar_no           	= $request->coborrower_aadhaar_no;
		$Loan->coborrower_mobile_no           	= $request->coborrower_mobile_no;
		$Loan->coborrower_address           	= $request->coborrower_address;
		$Loan->coborrower_pin_code           	= $request->coborrower_pin_code;
		$Loan->coborrower_city           		= $request->coborrower_city;
		$Loan->coborrower_taluka           		= $request->coborrower_taluka;
		$Loan->coborrower_district           	= $request->coborrower_district;
		$Loan->coborrower_state           		= $request->coborrower_state;
		$Loan->guarantor1_name           		= $request->guarantor1_name;
		$Loan->guarantor1_dob           		= $request->guarantor1_dob;
		$Loan->guarantor1_gender           		= $request->guarantor1_gender;
		$Loan->guarantor1_pan_no           		= $request->guarantor1_pan_no;
		$Loan->guarantor1_aadhaar_no           	= $request->guarantor1_aadhaar_no;
		$Loan->guarantor1_mobile_no           	= $request->guarantor1_mobile_no;
		$Loan->guarantor1_address           	= $request->guarantor1_address;
		$Loan->guarantor1_pin_code           	= $request->guarantor1_pin_code;
		$Loan->guarantor1_city           		= $request->guarantor1_city;
		$Loan->guarantor1_taluka           		= $request->guarantor1_taluka;
		$Loan->guarantor1_district           	= $request->guarantor1_district;
		$Loan->guarantor1_state           		= $request->guarantor1_state;
		$Loan->guarantor2_name           		= $request->guarantor2_name;
		$Loan->guarantor2_dob           		= $request->guarantor2_dob;
		$Loan->guarantor2_gender           		= $request->guarantor2_gender;
		$Loan->guarantor2_pan_no           		= $request->guarantor2_pan_no;
		$Loan->guarantor2_aadhaar_no           	= $request->guarantor2_aadhaar_no;
		$Loan->guarantor2_mobile_no           	= $request->guarantor2_mobile_no;
		$Loan->guarantor2_address           	= $request->guarantor2_address;
		$Loan->guarantor2_pin_code           	= $request->guarantor2_pin_code;
		$Loan->guarantor2_city           		= $request->guarantor2_city;
		$Loan->guarantor2_taluka           		= $request->guarantor2_taluka;
		$Loan->guarantor2_district           	= $request->guarantor2_district;
		$Loan->guarantor2_state           		= $request->guarantor2_state;
		$Loan->case_filed_on           			= $request->case_filed_on;
		$Loan->recovery_order_number           	= $request->recovery_order_number;
		$Loan->recovery_order_date           	= $request->recovery_order_date;
		$Loan->recovery_order_authority         = $request->recovery_order_authority;
		$Loan->recovery_order_amount           	= $request->recovery_order_amount;
      	$Loan->status           				= 'C';
		$Loan->save();		
		
        return redirect('/admin/loan/list')->with('success', 'You have successfully added!');
    }
	
	public function edit_loan($id){
		
		$loaninfo = Loan::where('id',$id)->first();
        return view('admin.loan.edit',compact('loaninfo'));
	}
	
	public function edit_loan_action(Request $request){
		
		$request->validate([
            'loan_type'          => ['required'],
            
        ]);
				
		$dataArray = array();			
		//$dataArray['user_id']           				= Auth::user()->id;
      	$dataArray['no_of_months_due']           		= $request->no_of_months_due;
        $dataArray['society_number']           		    = $request->society_number;
		$dataArray['loan_type']           				= $request->loan_type;
		$dataArray['loan_amount']           			= $request->loan_amount;
		$dataArray['loan_date']           				= $request->loan_date;
		$dataArray['loan_balance_amount']           	= $request->loan_balance_amount;
		$dataArray['loan_balance_as_date']           	= $request->loan_balance_as_date;
		$dataArray['loan_status']           			= $request->loan_status;
      	$dataArray['loan_account_number']           	= $request->loan_account_number;
		$dataArray['name']           					= $request->name;
		$dataArray['dob']           					= $request->dob;
		$dataArray['gender']           					= $request->gender;
		$dataArray['pan_no']           					= $request->pan_no;
		$dataArray['aadhaar_no']           				= $request->aadhaar_no;
		$dataArray['mobile_no']           				= $request->mobile_no;
		$dataArray['address']           				= $request->address;
		$dataArray['pin_code']           				= $request->pin_code;
		$dataArray['city']           					= $request->city;
		$dataArray['taluka']           					= $request->taluka;
		$dataArray['district']           				= $request->district;
		$dataArray['state']           					= $request->state;
		$dataArray['coborrower_name']           		= $request->coborrower_name;
		$dataArray['coborrower_dob']           			= $request->coborrower_dob;
		$dataArray['coborrower_gender']           		= $request->coborrower_gender;
		$dataArray['coborrower_pan_no']           		= $request->coborrower_pan_no;
		$dataArray['coborrower_aadhaar_no']           	= $request->coborrower_aadhaar_no;
		$dataArray['coborrower_mobile_no']           	= $request->coborrower_mobile_no;
		$dataArray['coborrower_address']           		= $request->coborrower_address;
		$dataArray['coborrower_pin_code']           	= $request->coborrower_pin_code;
		$dataArray['coborrower_city']           		= $request->coborrower_city;
		$dataArray['coborrower_taluka']           		= $request->coborrower_taluka;
		$dataArray['coborrower_district']           	= $request->coborrower_district;
		$dataArray['coborrower_state']           		= $request->coborrower_state;
		$dataArray['guarantor1_name']           		= $request->guarantor1_name;
		$dataArray['guarantor1_dob']           			= $request->guarantor1_dob;
		$dataArray['guarantor1_gender']           		= $request->guarantor1_gender;
		$dataArray['guarantor1_pan_no']           		= $request->guarantor1_pan_no;
		$dataArray['guarantor1_aadhaar_no']           	= $request->guarantor1_aadhaar_no;
		$dataArray['guarantor1_mobile_no']           	= $request->guarantor1_mobile_no;
		$dataArray['guarantor1_address']           		= $request->guarantor1_address;
		$dataArray['guarantor1_pin_code']           	= $request->guarantor1_pin_code;
		$dataArray['guarantor1_city']           		= $request->guarantor1_city;
		$dataArray['guarantor1_taluka']           		= $request->guarantor1_taluka;
		$dataArray['guarantor1_district']           	= $request->guarantor1_district;
		$dataArray['guarantor1_state']           		= $request->guarantor1_state;
		$dataArray['guarantor2_name']           		= $request->guarantor2_name;
		$dataArray['guarantor2_dob']           			= $request->guarantor2_dob;
		$dataArray['guarantor2_gender']           		= $request->guarantor2_gender;
		$dataArray['guarantor2_pan_no']           		= $request->guarantor2_pan_no;
		$dataArray['guarantor2_aadhaar_no']           	= $request->guarantor2_aadhaar_no;
		$dataArray['guarantor2_mobile_no']           	= $request->guarantor2_mobile_no;
		$dataArray['guarantor2_address']           		= $request->guarantor2_address;
		$dataArray['guarantor2_pin_code']           	= $request->guarantor2_pin_code;
		$dataArray['guarantor2_city']           		= $request->guarantor2_city;
		$dataArray['guarantor2_taluka']           		= $request->guarantor2_taluka;
		$dataArray['guarantor2_district']           	= $request->guarantor2_district;
		$dataArray['guarantor2_state']           		= $request->guarantor2_state;
		$dataArray['case_filed_on']           			= $request->case_filed_on;
		$dataArray['recovery_order_number']           	= $request->recovery_order_number;
		$dataArray['recovery_order_date']           	= $request->recovery_order_date;
		$dataArray['recovery_order_authority']         	= $request->recovery_order_authority;
		$dataArray['recovery_order_amount']           	= $request->recovery_order_amount;
      	$dataArray['status']           					= $request->status;
		//$dataArray['updated_at'] 						= now();
		Loan::where('id',$request->id)->update($dataArray);
        return redirect('/admin/loan/list')->with('success', 'You have successfully updated!');
    }
	
	public function delete_loan($id){		
		
		loan::where('id',$id)->delete();
		return redirect('/admin/loan/list')->with('success', 'You have successfully deleted!');
	}
	
	public function download_loan($search){
		
        $loaninfo = Loan::where('pan_no',$search)->orWhere('aadhaar_no', '=', $search)->get();
      	$personalArr = array();
      	/* if(isset($loaninfo)){
          	$i=0;
          	foreach($loaninfo as $list){
              if($list->society_number == 'KPL249'){ 
                continue; 
              }                
              $personalArr[] = array(
              	'name' 				=> $list->name,
                'society_number' 	=> $list->society_number,
                'dob' 				=> $list->dob,
              );
              $i++;
            }
        }
      	echo "<pre>";
        print_r($personalArr);exit; */
		$pdf = PDF::loadView('admin.loan.loan_pdf',compact('loaninfo','personalArr'));		
        return $pdf->download('loan-'.$search.'.pdf');
	}
	
	public function loan_import(){
		 $loanfile = Loanfile::select('loan_file.*','users.name as user_name')->leftJoin('users','users.id','=','loan_file.user_id')->orderBy('loan_file.id', 'desc')->get();  
		 return view('admin.loan.import',compact('loanfile'));
	}
	
	public function loan_import_action(Request $request){
		$dataArr = array();
          if($request->hasfile('loan_file')) {
              $file = $request->file('loan_file');	

              $row = 1;
              if (($handle = fopen($file, "r")) !== FALSE) {
                while (($column = fgetcsv($handle, 1000, ",")) !== FALSE) {
                  $num = count($column);
                  if($row == 1){
                      $row++;
                      continue;
                  }
                  if($row == 2){
                      $row++;
                      continue;
                  }
                  
                  if(!empty($column[1])){
                      $Loan 								= new Loan;		
                      $Loan->user_id           				= Auth::user()->id;
                      $Loan->society_number           		= $column[1];
                      $Loan->loan_account_number           	= $column[2];
                      $Loan->loan_type           			= $column[3];
                      $Loan->loan_amount           			= $column[4];
                      $Loan->loan_date           			= $column[5];
                      $Loan->loan_balance_amount           	= $column[6];
                      $Loan->no_of_months_due           	= $column[7];
                      $Loan->loan_balance_as_date           = $column[8];
                      $Loan->loan_status           			= $column[9];
                      $Loan->name           				= $column[10];
                      $Loan->dob           					= $column[11];
                      $Loan->gender           				= $column[12];
                      $Loan->pan_no           				= $column[13];
                      $Loan->aadhaar_no           			= $column[14];
                      $Loan->mobile_no           			= $column[15];
                      $Loan->address           				= $column[16];
                      $Loan->pin_code           			= $column[17];
                      $Loan->city           				= $column[18];
                      $Loan->taluka           				= $column[19];
                      $Loan->district           			= $column[20];
                      $Loan->state           				= $column[21]; 
                      $Loan->coborrower_name           		= $column[22];
                      $Loan->coborrower_dob           		= $column[23];
                      $Loan->coborrower_gender           	= $column[24];
                      $Loan->coborrower_pan_no           	= $column[25];
                      $Loan->coborrower_aadhaar_no          = $column[26];
                      $Loan->coborrower_mobile_no           = $column[27];
                      $Loan->coborrower_address           	= $column[28];
                      $Loan->coborrower_pin_code           	= $column[29];
                      $Loan->coborrower_city           		= $column[30];
                      $Loan->coborrower_taluka           	= $column[31];
                      $Loan->coborrower_district           	= $column[32];
                      $Loan->coborrower_state           	= $column[33];
                      $Loan->guarantor1_name           		= $column[34];
                      $Loan->guarantor1_dob           		= $column[35];
                      $Loan->guarantor1_gender           	= $column[36];
                      $Loan->guarantor1_pan_no           	= $column[37];
                      $Loan->guarantor1_aadhaar_no          = $column[38];
                      $Loan->guarantor1_mobile_no           = $column[39];
                      $Loan->guarantor1_address           	= $column[40];
                      $Loan->guarantor1_pin_code           	= $column[41];
                      $Loan->guarantor1_city           		= $column[42];
                      $Loan->guarantor1_taluka           	= $column[43];
                      $Loan->guarantor1_district           	= $column[44];
                      $Loan->guarantor1_state           	= $column[45];
                      $Loan->guarantor2_name           		= $column[46];
                      $Loan->guarantor2_dob           		= $column[47];
                      $Loan->guarantor2_gender           	= $column[48];
                      $Loan->guarantor2_pan_no           	= $column[49];
                      $Loan->guarantor2_aadhaar_no          = $column[50];
                      $Loan->guarantor2_mobile_no           = $column[51];
                      $Loan->guarantor2_address           	= $column[52];
                      $Loan->guarantor2_pin_code           	= $column[53];
                      $Loan->guarantor2_city           		= $column[54];
                      $Loan->guarantor2_taluka           	= $column[55];
                      $Loan->guarantor2_district           	= $column[56];
                      $Loan->guarantor2_state           	= $column[57];
                      $Loan->case_filed_on           		= $column[58];
                      $Loan->recovery_order_number          = $column[59];
                      $Loan->recovery_order_date           	= $column[60];
                      $Loan->recovery_order_authority       = $column[61];
                      $Loan->recovery_order_amount          = $column[62];
                      $Loan->upload_date           			= $column[63];
                      $Loan->status           				= 'C';
                      $Loan->save();	
                  }


                }
                fclose($handle);
              }
            

              return redirect('/admin/loan/list')->with('success', 'You have successfully added!');

          }		
	}
  
  	public function update_loan_import_status($id){
      
      	$Loanfile = Loanfile::where('id',$id)->first();
      	if($Loanfile->status == '0'){
          $dataArray = array();
          $dataArray['status']           	= '1';		
          Loanfile::where('id',$id)->update($dataArray);

          return redirect('/admin/loan/import')->with('success', 'You have successfully deleted!');
        }      	
	}
  
  	public function delete_loan_import($id){
      
      	$Loanfile = Loanfile::where('id',$id)->first();
        if(!empty($Loanfile->loan_file)){
          $getFilePath = public_path('uploads/csv_file/').$Loanfile->loan_file;
          if(file_exists($getFilePath)){
            unlink($getFilePath);
          }
        }
		
		Loanfile::where('id',$id)->delete();
		return redirect('/admin/loan/import')->with('success', 'You have successfully deleted!');
	}
	
	#Course
	public function all_course(){
		
		$courselist = Course::select('course.*')->orderBy('id', 'desc')->paginate(2); 
        
		return view('admin.course.course_list',compact('courselist'));
    }
	public function add_course(){ 
	    
        return view('admin.course.add');
    }
	
	public function add_course_action(Request $request){
		
		$request->validate([
            'title'          		=> ['required'],            
        ]);	
      
      	if(isset($request->pdf)){
		    $pdfName = time().'.'.$request->pdf->extension();  
            $request->pdf->move(public_path('uploads/pdf/'), $pdfName);
		}else{
			$pdfName = '';
		}
		
		$Course 									= new Course;
		$Course->title           					= $request->title;
		$Course->price           					= $request->price;
		$Course->description           				= $request->description;
        $Course->pdf           						= $pdfName;
		$Course->save();		
		
        return redirect('/admin/course/list')->with('success', 'You have successfully added!');
    }
	
	public function edit_course($id){
		
		$courseinfo = Course::where('id',$id)->first();
        return view('admin.course.edit',compact('courseinfo'));
	}
	
	public function edit_course_action(Request $request){
		
		$request->validate([
            'title'          		=> ['required'],            
        ]);
      
		$dataArray = array();
		$dataArray['title']           				= $request->title; 
		$dataArray['price']           				= $request->price; 
		$dataArray['description']           		= $request->description;
      
      	if(isset($request->pdf)){
			$courseInfo = Course::where('id',$request->id)->first();
			if(!empty($courseInfo->pdf)){
				$getFilePath = public_path('uploads/pdf/').$courseInfo->pdf;
				if(file_exists($getFilePath)){
					unlink($getFilePath);
				}
			}
		    $pdfName = time().'.'.$request->pdf->extension();  
            $request->pdf->move(public_path('uploads/pdf/'), $pdfName);
			$dataArray['pdf']  = $pdfName;
		}
		
		Course::where('id',$request->id)->update($dataArray);
        return redirect('/admin/course/list')->with('success', 'You have successfully updated!');
    }
	
	public function delete_course($id){		
		
		Course::where('id',$id)->delete();
		return redirect('/admin/course/list')->with('success', 'You have successfully deleted!');
	}
  
  	#chapter
  	
  	public function all_subject(){
		
		$chapterlist = Coursechapter::select('course_chapter.*','course.title as course_title')->leftJoin('course','course.id','=','course_chapter.course_id')->where('is_parent',0)->orderBy('id', 'desc')->paginate(20);
        
		return view('admin.chapter.subject_list',compact('chapterlist'));
    }
  	
	public function all_chapter(){
		
		$chapterlist = Coursechapter::select('course_chapter.*','course.title as course_title')->leftJoin('course','course.id','=','course_chapter.course_id')->where('is_parent','>',0)->orderBy('id', 'desc')->paginate(20);
        
		return view('admin.chapter.chapter_list',compact('chapterlist'));
    }
	public function add_chapter(){
      	$courselist = Course::select('course.*')->orderBy('id', 'desc')->get();
        return view('admin.chapter.add',compact('courselist'));
    }
	
	public function add_subject(){
      	$courselist = Course::select('course.*')->orderBy('id', 'desc')->get();
        return view('admin.chapter.add_subject',compact('courselist'));
    }
	
	public function add_chapter_action(Request $request){
		
		$request->validate([
            'course_id'          		=> ['required'],
            'chapter_name'          	=> ['required'],
        ]);	
        
        if(!empty($request->chapter_name)){
            $request->validate([
                'chapter_name'          	=> ['required'],
            ]);	
        }
        
        if(!empty($request->video_link)){
            $request->validate([
                'video_link'          	=> ['required'],
            ]);	
        }
        
        if(!empty($request->subject_id)){
            $sub = $request->subject_id;
        }else{
            $sub = '0';
        }
            
      	if(isset($request->pdf)){
		    $pdfName = time().'.'.$request->pdf->extension();  
            $request->pdf->move(public_path('uploads/pdf/'), $pdfName);
		}else{
			$pdfName = '';
		}
      		
		$Coursechapter 									= new Coursechapter;
		$Coursechapter->course_id           			= $request->course_id;
      	$Coursechapter->chapter_name           		    = $request->chapter_name;
        $Coursechapter->video_link           		    = $request->video_link;
        $Coursechapter->is_parent           		    = $sub;
        $Coursechapter->pdf           		            = $pdfName;
        
		$Coursechapter->save();		
		
		if($request->type=='chapter'){
		    return redirect('/admin/chapter/list')->with('success', 'You have successfully added!');
		}else{
		    return redirect('/admin/subject/list')->with('success', 'You have successfully added!');
		}
		
        
    }
	
	public function edit_chapter($id){
		$courselist = Course::select('course.*')->orderBy('id', 'desc')->get();
		$chapterinfo = Coursechapter::where('id',$id)->first();
        return view('admin.chapter.edit',compact('chapterinfo','courselist'));
	}
	
	public function edit_subject($id){
		$courselist = Course::select('course.*')->orderBy('id', 'desc')->get();
		$chapterinfo = Coursechapter::where('id',$id)->first();
        return view('admin.chapter.edit_subject',compact('chapterinfo','courselist'));
	}
	
	public function edit_chapter_action(Request $request){
		
		$request->validate([
            'course_id'          		=> ['required'],
            'chapter_name'          	=> ['required'],
        ]);	
        
        if(!empty($request->chapter_name)){
            $request->validate([
                'chapter_name'          	=> ['required'],
            ]);	
        }
        
        if(!empty($request->video_link)){
            $request->validate([
                'video_link'          	=> ['required'],
            ]);	
        }
        
        if(!empty($request->sub)){
            $sub = $request->subject_id;
        }else{
            $sub = '0';
        }
        
		$dataArray = array();
		$dataArray['course_id']           				= $request->course_id;
        $dataArray['chapter_name']           			= $request->chapter_name;
      	$dataArray['video_link']           				= $request->video_link;
      	$dataArray['is_parent']           		        = $sub;
      	
      	if(isset($request->pdf)){
			$courseInfo = Coursechapter::where('id',$request->id)->first();
			if(!empty($courseInfo->pdf)){
				$getFilePath = public_path('uploads/pdf/').$courseInfo->pdf;
				if(file_exists($getFilePath)){
					unlink($getFilePath);
				}
			}
		    $pdfName = time().'.'.$request->pdf->extension();  
            $request->pdf->move(public_path('uploads/pdf/'), $pdfName);
			$dataArray['pdf']  = $pdfName;
		}
      
		Coursechapter::where('id',$request->id)->update($dataArray);
		
		if($request->type=='chapter'){
		    return redirect('/admin/chapter/list')->with('success', 'You have successfully added!');
		}else{
		    return redirect('/admin/subject/list')->with('success', 'You have successfully added!');
		}
		
        
    }
    
    #get State By Ajax
	public function get_course_subject($course_id){	
		
		$subjectArr    	    = Coursechapter::where('course_id',$course_id)->where('is_parent','0')->get();		
		return  json_encode($subjectArr);
	}
	
	public function delete_chapter($id){		
		
		Coursechapter::where('id',$id)->delete();
		return redirect('/admin/chapter/list')->with('success', 'You have successfully deleted!');
	}
	
	
	public function all_course_purchase(){
		
		$purchaselist = Coursepurchase::select('course_purchase.*','users.name as user_name','users.mobile_no as user_mobile_no')->leftJoin('users','users.id','=','course_purchase.user_id')->orderBy('course_purchase.id', 'desc')->get();
        
		return view('admin.course.purchase_list',compact('purchaselist'));
    }
	
	public function download_course_receipt($id){
		
		$courseinfo = Coursepurchase::select('course_purchase.*','users.name as user_name','users.mobile_no as user_mobile_no')->leftJoin('users','users.id','=','course_purchase.user_id')->where('course_purchase.id',$id)->first();
		
		$pdf = PDF::loadView('admin.course.receipt',compact('courseinfo'));

        return $pdf->download('receipt-'.$id.'.pdf');
	}
  
    public function all_insurance(Request $request){
		
		#$loanlist = Loan::select('loan.*','users.name as user_name')->leftJoin('users','users.id','=','loan.insurance_user_id')->where('insurance','Y')->orderBy('id', 'desc')->get();
        
		$Loan = Loan::query();
		$Loan = $Loan->select('loan.*','users.name as user_name','users.mobile_no as user_mobile_no')->leftJoin('users','users.id','=','loan.insurance_user_id');
      
      	if ($request->start_date && $request->end_date) {
			$start_date = $request->start_date;
			$end_date 	= $request->end_date;
			$Loan->whereBetween('loan.created_at',[$start_date,$end_date]);
		}
		
		if(!empty($request->status) && ($request->status=='C')){
		    $loanlist = $Loan->where('loan.insurance','C')->orderBy('loan.id', 'DESC')->paginate(20);
		}else{
		    $loanlist = $Loan->where('loan.insurance','Y')->orderBy('loan.id', 'DESC')->paginate(20);
		}
      
          
		
		return view('admin.loan.insurance_list',compact('loanlist'));
    }
  	
  	public function insurance_update($id){
  	    
  	    $Loanfile = Loan::where('id',$id)->first();
      	if($Loanfile->insurance == 'Y'){
          $dataArray = array();
          $dataArray['insurance']           	= 'C';		
          Loan::where('id',$id)->update($dataArray);

          return redirect('/admin/insurance/list')->with('success', 'You have successfully Complete insurance!');
        }
	}
	
    public function transaction_list()
    {	
        
		$transactionlist = Loanpurchase::select('loan_purchase.*','users.name as user_name','users.mobile_no as user_mobile_no')->leftJoin('users','users.id','=','loan_purchase.user_id')->orderBy('loan_purchase.id', 'DESC')->get();
        return view('admin.transaction_list',compact('transactionlist'));
    }
    
    public function download_loan_receipt($id){
		
		$loaninfo = Loanpurchase::select('loan_purchase.*','users.name as user_name','users.mobile_no as user_mobile_no')->leftJoin('users','users.id','=','loan_purchase.user_id')->where('loan_purchase.id',$id)->first();
		$pdf = PDF::loadView('admin.loan_receipt',compact('loaninfo'));

        return $pdf->download('loan-receipt-'.$id.'.pdf');
	}
    
    #GLOBAL SETTING
	public function global_setting(){
		
		$settingInfo = Setting::first();
		return view('admin.setting',compact('settingInfo'));
	}
	public function global_setting_action(Request $request){
		
		if(empty($request->setting_id)){
			
			$setting = new Setting;
			$setting->loan_search_price     = $request->loan_search_price;
			$setting->save();
			
			return redirect('/admin/setting')->with('success', 'You have successfully added!');
			
		}else{
			
			
			$settingArray = array();
			$settingArray['loan_search_price']     = $request->loan_search_price;
		
			Setting::where('id',$request->setting_id)->update($settingArray);
			return redirect('/admin/setting')->with('success', 'You have successfully updated!');	
		}
	}

	//Testimonial
	public function all_testimonial(){
		$testimoniallist = Testimonial::select('testimonial.*')->orderBy('id', 'desc')->paginate(10); 
		
		return view('admin.testimonial.list',compact('testimoniallist'));
	}
	public function add_testimonial(){ 
	    
		return view('admin.testimonial.add');
	}
	public function add_testimonial_action(Request $request){
		
		$request->validate([
			'name'          		=> ['required'],
			'designation'          => ['required'],
			'description'          => ['required'],            
		]);	
		
		$Testimonial 									= new Testimonial;		
		$Testimonial->name           					= $request->name;
		$Testimonial->designation           			= $request->designation;
		$Testimonial->description           			= $request->description;
		
	  	if(isset($request->image)){
		    $imageName = time().'.'.$request->image->extension();  
			$request->image->move(public_path('uploads/testimonial/'), $imageName);
			$Testimonial->image  = $imageName;
		}
		
		$Testimonial->save();		
		
		return redirect('/admin/testimonial/list')->with('success', 'You have successfully added!');	
	}
	public function edit_testimonial($id){
		
		$testimonialInfo = Testimonial::where('id',$id)->first();
		return view('admin.testimonial.edit',compact('testimonialInfo'));
	}
	public function edit_testimonial_action(Request $request){
		
		$request->validate([
			'name'          		=> ['required'],
			'designation'          => ['required'],
			'description'          => ['required'],            
		]);	
		
		$dataArray = array();
		$dataArray['name']           				= $request->name;
		$dataArray['designation']           			= $request->designation;
		$dataArray['description']           			= $request->description;
		
	  	if(isset($request->image)){
			$testimonialInfo = Testimonial::where('id',$request->id)->first();
			if(!empty($testimonialInfo->image)){
				$getFilePath = public_path('uploads/testimonial/').$testimonialInfo->image;
				if(file_exists($getFilePath)){
					unlink($getFilePath);
				}
			}
		    $imageName = time().'.'.$request->image->extension();  
			$request->image->move(public_path('uploads/testimonial/'), $imageName);
			$dataArray['image']  = $imageName;
	   }
		
	   Testimonial::where('id',$request->id)->update($dataArray);
	   return redirect('/admin/testimonial/list')->with('success', 'You have successfully updated!');	
	}
	public function delete_testimonial($id){		
		
		$testimonialInfo = Testimonial::where('id',$id)->first();
		if(!empty($testimonialInfo->image)){
			$getFilePath = public_path('uploads/testimonial/').$testimonialInfo->image;
			if(file_exists($getFilePath)){
				unlink($getFilePath);
			}
		}
		
		Testimonial::where('id',$id)->delete();
		return redirect('/admin/testimonial/list')->with('success', 'You have successfully deleted!');
	}

}
