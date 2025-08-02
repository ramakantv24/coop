<?php

namespace App\Http\Controllers\Cooperative;

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
use App\Models\Coursepurchase;
use App\Models\Loanfile;
use App\Models\Loanpurchase;
use Mail;

class CooperativeController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('cooperative');
    }

    public function index(){
		
        return view('cooperative.dashboard');
    }	
	
	public function profile(){ 
        
		$profileInfo = Auth::user();
        return view('cooperative.profile',compact('profileInfo'));
    }
	
	public function update_profile(Request $request){
		
		$dataArray = array();
		
		$dataArray['name']  = $request->name;
		$dataArray['email'] = $request->email;
		
		User::where('id',Auth::user()->id)->where('role','cooperative')->update($dataArray);
		return redirect('/cooperative/profile')->with('success', 'Your profile has been updated successfully!');
	}
	
	#Change Password
	public function change_password(){ 
       
        return view('cooperative.change_password');
    }
	
	public function change_password_action(Request $request){ 
        
		$request->validate([
            'password'         => ['required', 'string', 'min:8', 'confirmed'],
        ]);
		
		$dataArray = array();
		$dataArray['password']    	= Hash::make($request->password);
		
		$user_id = Auth::user()->id;
		
        User::where('id',$user_id)->update($dataArray);
        return redirect('/cooperative/change-password')->with('success', 'You have successfully updated!');
    }
	
	
	#loan
	public function all_loan(Request $request){
		
		#$loanlist = Loan::select('loan.*','users.name as user_name')->leftJoin('users','users.id','=','loan.user_id')->where('loan.user_id',Auth::user()->id)->orWhere('loan.society_number',Auth::user()->society_number)->whereIn('loan.status',array('C','P'))->orderBy('loan.id', 'desc')->paginate(20);
        
		$Loan = Loan::query();
		$Loan = $Loan->select('loan.*');
      
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
		
		if ($request->insurance) {			
			$Loan = $Loan->where('loan.insurance', $request->insurance);
		}
      	
        $loanlist = $Loan->Where('loan.society_number',Auth::user()->society_number)->whereIn('loan.status',array('C','P','D'))->orderBy('loan.id', 'desc')->paginate(20);  
       
		return view('cooperative.loan.list',compact('loanlist'));
    }
    
	public function add_loan(){ 
		
        return view('cooperative.loan.add');
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
		$Loan->save();		
		
        return redirect('/cooperative/loan/list')->with('success', 'You have successfully added!');
    }
	
	public function edit_loan($id){
		
		$loaninfo = Loan::where('id',$id)->first();
        return view('cooperative.loan.edit',compact('loaninfo'));
	}
	
	public function edit_loan_action(Request $request){
		
		$request->validate([
            'loan_type'          => ['required'],
            
        ]);
				
		$dataArray = array();			
		//$dataArray['user_id']           				= Auth::user()->id;
        $dataArray['society_number']           		    = $request->society_number;
      	$dataArray['no_of_months_due']           		= $request->no_of_months_due;
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
        $dataArray['status']           					= 'P';
		
		Loan::where('id',$request->id)->update($dataArray);
        return redirect('/cooperative/loan/list')->with('success', 'You have successfully updated!');
    }
	
	public function delete_loan($id){		
		
		//loan::where('id',$id)->delete();
      	$dataArray = array();
        $dataArray['status']           					= 'D';		
		Loan::where('id',$id)->update($dataArray);
      
		return redirect('/cooperative/loan/list')->with('success', 'You have successfully deleted!');
	}
	
	public function download_loan($search){
		
		$loaninfo = Loan::where('status','C')->where('pan_no',$search)->orWhere('aadhaar_no', '=', $search)->get();
		$pdf = PDF::loadView('cooperative.loan.loan_pdf',compact('loaninfo'));

        return $pdf->download('loan-'.$search.'.pdf');
	}
	
	public function loan_import(){
		 $loanfile = Loanfile::orderBy('id', 'desc')->get();      
		 return view('cooperative.loan.import',compact('loanfile'));
	}
	
	public function loan_import_action(Request $request){
      
		if(isset($request->loan_file)){
		    $fileName = 'CSVfile-'.time().'.'.$request->loan_file->extension();  
            $request->loan_file->move(public_path('uploads/csv_file/'), $fileName);
		}else{
			$fileName = '';
		}
		
        $Loanfile 								= new Loanfile;		
        $Loanfile->user_id           			= Auth::user()->id; 
      	$Loanfile->loan_file           			= $fileName;
        $Loanfile->save();	
                
		return redirect('/cooperative/loan/import')->with('success', 'You have successfully added!');	
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
		return redirect('/cooperative/loan/import')->with('success', 'You have successfully deleted!');
	}
  
  	public function loan_search(Request $request){
      
      	$Loan = Loan::query();
		$Loan = $Loan->select('loan.*','users.name as user_name')->leftJoin('users','users.id','=','loan.user_id');
      
      	 if ($request->search) {			
                $Loan = $Loan->where('loan.pan_no', $request->search)              	  
          					 ->orWhere('loan.aadhaar_no', '=', $request->search);
            }
      
      	$loanlist = $Loan->where('loan.insurance','N')->where('loan.status','C')->orderBy('loan.id', 'DESC')->get();  
      
		return view('cooperative.loan.serach_list',compact('loanlist'));
    }
  	
  	public function loan_view($id){
		
		$loaninfo = Loan::where('id',$id)->first();
        return view('cooperative.loan.loan_view',compact('loaninfo'));
	}
  
  	public function loan_apply($id,Request $request){
      
      	if (!empty($request->id) && !empty($request->term_condition)) {	
          
			$dataArray = array();			
            $dataArray['insurance_user_id']           		= Auth::user()->id;
            $dataArray['insurance']           				= 'Y';
          	Loan::where('id',$id)->update($dataArray);
          	return redirect('/cooperative/loan/apply/'.$id)->with('success', 'You have successfully Applied!');
		}else{
          
          	$loaninfo = Loan::where('id',$id)->first();
        	return view('cooperative.loan.loan_apply',compact('loaninfo'));
          
        }		
		
	}
	
	public function transaction_list()
    {	
        $user_id = Auth::user()->id;
		$transactionlist = Loanpurchase::where('user_id',$user_id)->orderBy('id', 'DESC')->get();
        return view('cooperative.transaction_list',compact('transactionlist'));
    }
    
     public function download_loan_receipt($id){
		
		$loaninfo = Loanpurchase::select('loan_purchase.*','users.name as user_name','users.mobile_no as user_mobile_no')->leftJoin('users','users.id','=','loan_purchase.user_id')->where('loan_purchase.id',$id)->first();
		$pdf = PDF::loadView('cooperative.loan_receipt',compact('loaninfo'));

        return $pdf->download('loan-receipt-'.$id.'.pdf');
	}
  	
}
