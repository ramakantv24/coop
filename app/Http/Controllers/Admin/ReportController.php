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
use Mail;

class ReportController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
    }
	
	public function index(){
		
		return view('admin.report.report');
    }
  
  	public function download_excel(Request $request){ 
      
      	if($request->type == 'Cooperative'){          
          $User = User::query();		
          if ($request->start_date && $request->end_date) {
              $start_date = $request->start_date;
              $end_date 	= $request->end_date;
              $User->whereBetween('created_at',[$start_date,$end_date]);
          }      
          $downloadData = $User->whereIn('role',array('cooperative'))->orderBy('id', 'DESC')->get();          
          $firstRow = array('id','name','email','mobile_no','location','society_details','society_number','registration_number','created_at','updated_at');
          
          $delimiter = ","; 
          $filename = "cooperative-data_" . date('Y-m-d') . ".csv";
          $f = fopen('php://memory', 'w');
          $fields = $firstRow; 
          fputcsv($f, $fields, $delimiter);
          foreach($downloadData as $data){
              $lineData = array($data->id,$data->name,$data->email,$data->mobile_no,$data->location,$data->society_details,$data->society_number,$data->registration_number,$data->created_at,$data->updated_at); 
              fputcsv($f, $lineData, $delimiter); 	
          }
          fseek($f, 0);		 
          header('Content-Type: text/csv'); 
          header('Content-Disposition: attachment; filename="' . $filename . '";');
          fpassthru($f);
          
        }elseif($request->type == 'User'){          
          $User = User::query();		
          if ($request->start_date && $request->end_date) {
              $start_date = $request->start_date;
              $end_date 	= $request->end_date;
              $User->whereBetween('created_at',[$start_date,$end_date]);
          }      
          $downloadData = $User->whereIn('role',array('customer'))->orderBy('id', 'DESC')->get();          
          $firstRow = array('id','name','email','mobile_no','location','created_at','updated_at');
          
          $delimiter = ","; 
          $filename = "User-data_" . date('Y-m-d') . ".csv";
          $f = fopen('php://memory', 'w');
          $fields = $firstRow; 
          fputcsv($f, $fields, $delimiter);
          foreach($downloadData as $data){
              $lineData = array($data->id,$data->name,$data->email,$data->mobile_no,$data->location,$data->created_at,$data->updated_at); 
              fputcsv($f, $lineData, $delimiter); 	
          }
          fseek($f, 0);		 
          header('Content-Type: text/csv'); 
          header('Content-Disposition: attachment; filename="' . $filename . '";');
          fpassthru($f);
          
        }elseif($request->type == 'Loan'){          
          $Loan = Loan::query();		
          if ($request->start_date && $request->end_date) {
              $start_date = $request->start_date;
              $end_date 	= $request->end_date;
              $Loan->whereBetween('created_at',[$start_date,$end_date]);
          }      
          $downloadData = $Loan->orderBy('id', 'DESC')->get();          
          $firstRow = array('id','user_id','society_number','loan_type','loan_amount','loan_date','loan_balance_amount','loan_balance_as_date','loan_status','loan_account_number','no_of_months_due','name','dob','gender','pan_no','aadhaar_no','mobile_no','address','pin_code','city','taluka','district','state','coborrower_name','coborrower_dob','coborrower_gender','coborrower_pan_no','coborrower_aadhaar_no','coborrower_mobile_no','coborrower_address','coborrower_pin_code','coborrower_city','coborrower_taluka','coborrower_district','coborrower_state','guarantor1_name','guarantor1_dob','guarantor1_gender','guarantor1_pan_no','guarantor1_aadhaar_no','guarantor1_mobile_no','guarantor1_address','guarantor1_pin_code','guarantor1_city','guarantor1_taluka','guarantor1_district','guarantor1_state','guarantor2_name','guarantor2_dob','guarantor2_gender','guarantor2_pan_no','guarantor2_aadhaar_no','guarantor2_mobile_no','guarantor2_address','guarantor2_pin_code','guarantor2_city','guarantor2_taluka','guarantor2_district','guarantor2_state','case_filed_on','recovery_order_number','recovery_order_date','recovery_order_authority','recovery_order_amount','upload_date','insurance','insurance_user_id','status','created_at','updated_at');
          
          $delimiter = ","; 
          $filename = "Loan-data_" . date('Y-m-d') . ".csv";
          $f = fopen('php://memory', 'w');
          $fields = $firstRow; 
          fputcsv($f, $fields, $delimiter);
          foreach($downloadData as $data){
              $lineData = array($data->id,$data->user_id,$data->society_number,$data->loan_type,$data->loan_amount,$data->loan_date,$data->loan_balance_amount,$data->loan_balance_as_date,$data->loan_status,$data->loan_account_number,$data->no_of_months_due,$data->name,$data->dob,$data->gender,$data->pan_no,$data->aadhaar_no,$data->mobile_no,$data->address,$data->pin_code,$data->city,$data->taluka,$data->district,$data->state,$data->coborrower_name,$data->coborrower_dob,$data->coborrower_gender,$data->coborrower_pan_no,$data->coborrower_aadhaar_no,$data->coborrower_mobile_no,$data->coborrower_address,$data->coborrower_pin_code,$data->coborrower_city,$data->coborrower_taluka,$data->coborrower_district,$data->coborrower_state,$data->guarantor1_name,$data->guarantor1_dob,$data->guarantor1_gender,$data->guarantor1_pan_no,$data->guarantor1_aadhaar_no,$data->guarantor1_mobile_no,$data->guarantor1_address,$data->guarantor1_pin_code,$data->guarantor1_city,$data->guarantor1_taluka,$data->guarantor1_district,$data->guarantor1_state,$data->guarantor2_name,$data->guarantor2_dob,$data->guarantor2_gender,$data->guarantor2_pan_no,$data->guarantor2_aadhaar_no,$data->guarantor2_mobile_no,$data->guarantor2_address,$data->guarantor2_pin_code,$data->guarantor2_city,$data->guarantor2_taluka,$data->guarantor2_district,$data->guarantor2_state,$data->case_filed_on,$data->recovery_order_number,$data->recovery_order_date,$data->recovery_order_authority,$data->recovery_order_amount,$data->upload_date,$data->insurance,$data->insurance_user_id,$data->status,$data->created_at,$data->updated_at); 
              fputcsv($f, $lineData, $delimiter); 	
          }
          fseek($f, 0);		 
          header('Content-Type: text/csv'); 
          header('Content-Disposition: attachment; filename="' . $filename . '";');
          fpassthru($f);
          
        }elseif($request->type == 'Insurance'){          
          $Loan = Loan::query();		
          if ($request->start_date && $request->end_date) {
              $start_date = $request->start_date;
              $end_date 	= $request->end_date;
              $Loan->whereBetween('created_at',[$start_date,$end_date]);
          }      
          $downloadData = $Loan->where('insurance','Y')->orderBy('id', 'DESC')->get();          
          $firstRow = array('id','user_id','society_number','loan_type','loan_amount','loan_date','loan_balance_amount','loan_balance_as_date','loan_status','loan_account_number','no_of_months_due','name','dob','gender','pan_no','aadhaar_no','mobile_no','address','pin_code','city','taluka','district','state','coborrower_name','coborrower_dob','coborrower_gender','coborrower_pan_no','coborrower_aadhaar_no','coborrower_mobile_no','coborrower_address','coborrower_pin_code','coborrower_city','coborrower_taluka','coborrower_district','coborrower_state','guarantor1_name','guarantor1_dob','guarantor1_gender','guarantor1_pan_no','guarantor1_aadhaar_no','guarantor1_mobile_no','guarantor1_address','guarantor1_pin_code','guarantor1_city','guarantor1_taluka','guarantor1_district','guarantor1_state','guarantor2_name','guarantor2_dob','guarantor2_gender','guarantor2_pan_no','guarantor2_aadhaar_no','guarantor2_mobile_no','guarantor2_address','guarantor2_pin_code','guarantor2_city','guarantor2_taluka','guarantor2_district','guarantor2_state','case_filed_on','recovery_order_number','recovery_order_date','recovery_order_authority','recovery_order_amount','upload_date','insurance','insurance_user_id','status','created_at','updated_at');
          
          $delimiter = ","; 
          $filename = "Insurance-data_" . date('Y-m-d') . ".csv";
          $f = fopen('php://memory', 'w');
          $fields = $firstRow; 
          fputcsv($f, $fields, $delimiter);
          foreach($downloadData as $data){
              $lineData = array($data->id,$data->user_id,$data->society_number,$data->loan_type,$data->loan_amount,$data->loan_date,$data->loan_balance_amount,$data->loan_balance_as_date,$data->loan_status,$data->loan_account_number,$data->no_of_months_due,$data->name,$data->dob,$data->gender,$data->pan_no,$data->aadhaar_no,$data->mobile_no,$data->address,$data->pin_code,$data->city,$data->taluka,$data->district,$data->state,$data->coborrower_name,$data->coborrower_dob,$data->coborrower_gender,$data->coborrower_pan_no,$data->coborrower_aadhaar_no,$data->coborrower_mobile_no,$data->coborrower_address,$data->coborrower_pin_code,$data->coborrower_city,$data->coborrower_taluka,$data->coborrower_district,$data->coborrower_state,$data->guarantor1_name,$data->guarantor1_dob,$data->guarantor1_gender,$data->guarantor1_pan_no,$data->guarantor1_aadhaar_no,$data->guarantor1_mobile_no,$data->guarantor1_address,$data->guarantor1_pin_code,$data->guarantor1_city,$data->guarantor1_taluka,$data->guarantor1_district,$data->guarantor1_state,$data->guarantor2_name,$data->guarantor2_dob,$data->guarantor2_gender,$data->guarantor2_pan_no,$data->guarantor2_aadhaar_no,$data->guarantor2_mobile_no,$data->guarantor2_address,$data->guarantor2_pin_code,$data->guarantor2_city,$data->guarantor2_taluka,$data->guarantor2_district,$data->guarantor2_state,$data->case_filed_on,$data->recovery_order_number,$data->recovery_order_date,$data->recovery_order_authority,$data->recovery_order_amount,$data->upload_date,$data->insurance,$data->insurance_user_id,$data->status,$data->created_at,$data->updated_at); 
              fputcsv($f, $lineData, $delimiter); 	
          }
          fseek($f, 0);		 
          header('Content-Type: text/csv'); 
          header('Content-Disposition: attachment; filename="' . $filename . '";');
          fpassthru($f);
          
        }
     
      
      	        
    }
	
}
