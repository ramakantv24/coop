<?php

namespace App\Http\Controllers\Customer;

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
use App\Models\Loanpurchase;
use App\Models\Setting;
use Mail;

class CustomerController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('customer');
    }

    public function index(){
               
        // Fetching the profile information of the authenticated user
		$profileInfo = Auth::user();
        
        return view('customer.dashboard',compact('profileInfo'));
    }	
	
	public function profile(){ 
        
		$profileInfo = Auth::user();
        return view('customer.profile',compact('profileInfo'));
    }
	
	public function update_profile(Request $request){
		
		$dataArray = array();
		
		$dataArray['name']  		= $request->name;
		$dataArray['email'] 		= $request->email;
        $dataArray['mobile_no'] 	= $request->mobile_no;
        $dataArray['location'] 		= $request->location;
		
		User::where('id',Auth::user()->id)->where('role','customer')->update($dataArray);
		return redirect('/customer/dashboard')->with('success', 'Your profile has been updated successfully!');
	}
	
	#Change Password
	public function change_password(){ 
       
        return view('customer.change_password');
    }
	
	public function change_password_action(Request $request){ 
        
		$request->validate([
            'password'         => ['required', 'string', 'min:8', 'confirmed'],
        ]);
		
		$dataArray = array();
		$dataArray['password']    	= Hash::make($request->password);
		
		$user_id = Auth::user()->id;
		
        User::where('id',$user_id)->update($dataArray);
        return redirect('/customer/change-password')->with('success', 'You have successfully updated!');
    }
  
  	public function credit_report(Request $request)
    {
		if (!empty($request->search)) {	
		    
		    $settinginfo = Setting::where('id','1')->first();
          
          	$Loan = Loan::query();
            $Loan = $Loan->select('loan.*','users.name as user_name')->leftJoin('users','users.id','=','loan.user_id');

            if ($request->search) {			
                $Loan = $Loan->where('pan_no', $request->search)              	  
          					 ->orWhere('aadhaar_no', '=', $request->search);
            }
          
            $loanlist = $Loan->where('status', 'C')->orderBy('id', 'DESC')->get(); 
          	return view('credit_report',compact('loanlist','settinginfo'));
          
		}else{
          
          	return view('credit_report');
          
        }		
        
    }
  
  	public function credit_report_view($id)
    {	
		$loaninfo = Loan::where('id',$id)->first();
        return view('credit_report_view',compact('loaninfo'));
    }
  
  	public function download_credit_report($search){
		
		$loaninfo = Loan::where('status', 'C')->where('pan_no',$search)->orWhere('aadhaar_no', '=', $search)->get();
		$pdf = PDF::loadView('credit_report_download',compact('loaninfo'));

        return $pdf->download('loan-'.$search.'.pdf');
	}
	
	public function transaction_list()
    {	
        $user_id = Auth::user()->id;
		$transactionlist = Loanpurchase::where('user_id',$user_id)->orderBy('id', 'DESC')->get();
        return view('customer.transaction_list',compact('transactionlist'));
    }
    
     public function download_loan_receipt($id){
		
		$loaninfo = Loanpurchase::select('loan_purchase.*','users.name as user_name','users.mobile_no as user_mobile_no')->leftJoin('users','users.id','=','loan_purchase.user_id')->where('loan_purchase.id',$id)->first();
		$pdf = PDF::loadView('customer.loan_receipt',compact('loaninfo'));

        return $pdf->download('loan-receipt-'.$id.'.pdf');
	}
	
	public function download_course_receipt($id){
		
		$courseinfo = Coursepurchase::select('course_purchase.*','users.name as user_name','users.mobile_no as user_mobile_no')->leftJoin('users','users.id','=','course_purchase.user_id')->where('course_purchase.id',$id)->first();
		
		$pdf = PDF::loadView('customer.course_receipt',compact('courseinfo'));

        return $pdf->download('course_receipt-'.$id.'.pdf');
	}
    
    public function course_view($id)
    {	
        
		$courseinfo = Course::where('id',$id)->first();
        
        return view('course_detail',compact('courseinfo'));
    }
    
    public function course_transaction_list(){
		
		$purchaselist = Coursepurchase::select('course_purchase.*','users.name as user_name')->leftJoin('users','users.id','=','course_purchase.user_id')->orderBy('course_purchase.id', 'desc')->get();
        
		return view('customer.course_transaction_list',compact('purchaselist'));
    } 
    
    public function course_purchase_list(){
		
		$coursePurchaselist = Course::select('course.*')->leftJoin('course_purchase','course_purchase.course_id','=','course.id')->where('course_purchase.user_id', Auth::user()->id)->where('course_purchase.code','PAYMENT_SUCCESS')->orderBy('course_purchase.id', 'desc')->get();
        
		return view('customer.course_purchase_list',compact('coursePurchaselist'));
    } 
    
    public function course_chapter_view($id){
		
		$coursePurchaseView = Coursechapter::select('course_chapter.*')->where('course_chapter.course_id', $id)->where('course_chapter.is_parent', '0')->orderBy('course_chapter.id', 'desc')->get();
        
        $courseinfo = Course::where('id',$id)->first();
        
		return view('customer.course_purchase_view',compact('coursePurchaseView','courseinfo'));
    } 
	
}
