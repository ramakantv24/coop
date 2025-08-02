<?php

namespace App\Http\Controllers;

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
use App\Models\Coursechapter;
use App\Models\Loanpurchase;
use Mail;
use Ixudra\Curl\Facades\Curl;


class PhonepeController extends Controller
{
    
    /* public function __construct(){
        $this->middleware('auth');
        $this->middleware('customer');
    } */
    
	public function index(Request $request)
    {	
        $uniqid = uniqid();
        
       /* $Loanpurchase 									= new Loanpurchase;
		$Loanpurchase->user_id           				= $request->user_id;
		$Loanpurchase->loan_id           				= $request->loan_id;
		$Loanpurchase->email           					= $request->email;
		$Loanpurchase->mobile_no           				= $request->mobile_no;
		$Loanpurchase->search_data           			= $request->search_data;
		$Loanpurchase->amount           				= $request->amount;
		$Loanpurchase->transactionId           			= $uniqid;
		$Loanpurchase->save();
		$payment_id                                     = $Loanpurchase->id;
		
		$data = array (
          'merchantId' => 'PGTESTPAYUAT82',
          'merchantTransactionId' => $uniqid,
          'merchantUserId' => 'MUID123',
          'amount' => 1000,
          'redirectUrl' => url('/phonepe-response'),
          'redirectMode' => 'POST',
          'callbackUrl' => url('/phonepe-response'),
          'mobileNumber' => 9616042923,
          'paymentInstrument' =>
          array (
            'type' => 'PAY_PAGE',
          ),
        );
        
        //SHA256(base64 encoded payload + "/pg/v1/pay" + salt key) + ### + salt index
       
        $encode = base64_encode(json_encode($data));
        

        $saltKey = '8d37b4ed-e18a-4150-a3de-8b4c505b7b21';
        $saltIndex = 1;

        $string = $encode.'/pg/v1/pay'.$saltKey;
        $sha256 = hash('sha256',$string);
       
        
        $finalXHeader = $sha256.'###'.$saltIndex;
        
        //echo $finalXHeader;exit;
        
        $response = Curl::to('https://developer.phonepe.com/v1/docs/standard-uat-sandbox/pg/v1/pay')
                ->withHeader('Content-Type:application/json')
                ->withHeader('X-VERIFY:'.$finalXHeader)
                ->withData(json_encode(['request' => $encode]))
                ->post();

        $rData = json_decode($response);
        
        echo "<pre>";
        print_r($rData);exit; */
        
        
        if($request->type=='course'){
            $Coursepurchase 									= new Coursepurchase;
    		$Coursepurchase->user_id           				    = $request->user_id;
    		$Coursepurchase->course_id           				= $request->course_id;
    		$Coursepurchase->email           					= $request->email;
    		$Coursepurchase->mobile_no           				= $request->mobile_no;
    		$Coursepurchase->type           				    = $request->type;
    		$Coursepurchase->amount           				    = $request->amount;
    		$Coursepurchase->transactionId           			= $uniqid;
    		$Coursepurchase->save();
    		$id                                                 = $Coursepurchase->id;
    		
    		$amount = $request->amount * 10;
    		
    		$data = array (
              'merchantId' => 'M1FL422RUA3U',
              'merchantTransactionId' => $uniqid,
              'merchantUserId' => 'MUID123',
              'amount' => $amount,
              'redirectUrl' => url('/phonepe-response'),
              'redirectMode' => 'POST',
              'callbackUrl' => url('/phonepe-response'),
              'mobileNumber' => $request->mobile_no,
              'email' => $request->email,
              'param2'=> $id,
              'paymentInstrument' =>
              array (
                'type' => 'PAY_PAGE',
                'course_id' => $request->course_id,
                'param2' => $id,
              ),
            );
    		
        }else{
            
            $Loanpurchase 									= new Loanpurchase;
    		$Loanpurchase->user_id           				= $request->user_id;
    		$Loanpurchase->loan_id           				= $request->loan_id;
    		$Loanpurchase->email           					= $request->email;
    		$Loanpurchase->mobile_no           				= $request->mobile_no;
    		$Loanpurchase->search_data           			= $request->search_data;
    		$Loanpurchase->amount           				= $request->amount;
    		$Loanpurchase->transactionId           			= $uniqid;
    		$Loanpurchase->save();
    		$payment_id                                     = $Loanpurchase->id;
    		
    		$amount = $request->amount * 10;
    		
    		$data = array (
              'merchantId' => 'M1FL422RUA3U',
              'merchantTransactionId' => $uniqid,
              'merchantUserId' => 'MUID123',
              'amount' => $amount,
              'redirectUrl' => url('/phonepe-response'),
              'redirectMode' => 'POST',
              'callbackUrl' => url('/phonepe-response'),
              'mobileNumber' => $request->mobile_no,
              'email' => $request->email,
              'param1'=> $payment_id,
              'paymentInstrument' =>
              array (
                'type' => 'PAY_PAGE',
                'loan_id' => $request->loan_id,
                'param1' => $payment_id,
              ),
            );
        }
        
        
        $encode = base64_encode(json_encode($data));

        $saltKey = '6fe87de0-00f9-486b-876f-0fc0ca7f3cac';
        $saltIndex = 1;

        $string = $encode.'/pg/v1/pay'.$saltKey;
        $sha256 = hash('sha256',$string);

        $finalXHeader = $sha256.'###'.$saltIndex;
        
        //$urlSandBox = "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay";
        //$urlLive    = "https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/pay";
        
        $response = Curl::to('https://api.phonepe.com/apis/hermes/pg/v1/pay')
                ->withHeader('Content-Type:application/json')
                ->withHeader('X-VERIFY:'.$finalXHeader)
                ->withData(json_encode(['request' => $encode]))
                ->post();

        $rData = json_decode($response);
        
        
        return redirect()->to($rData->data->instrumentResponse->redirectInfo->url);
    }
    
	public function response(Request $request)
    {
        //dd($request->all());
        
        $CoursepurchaseInfo = Coursepurchase::where('transactionId',$request->transactionId)->first();
        
        if(!empty($CoursepurchaseInfo->transactionId)){
            
            $dataArray = array();
            $dataArray['code']           			            = $request->code;
          	$dataArray['providerReferenceId']           		= $request->providerReferenceId;
          	$dataArray['payment_status']           		        = 'C';
          
    		Coursepurchase::where('transactionId',$request->transactionId)->update($dataArray);
    		
    		$CoursepurchaseInfo = Coursepurchase::where('transactionId',$request->transactionId)->first();
    		$userInfo = User::where('id',$CoursepurchaseInfo->user_id)->first();
    		
    		$to      = $userInfo->email;
            $subject = 'Course purchase';
            $message = 'You have successfully Payment - transactionId - '.$CoursepurchaseInfo->transactionId. ' providerReferenceId -'.$request->providerReferenceId;
            
            $headers = 'From: thecooperativestrust@gmail.com' . "\r\n" .
                         'Reply-To: thecooperativestrust@gmail.com' . "\r\n" .
                         'X-Mailer: PHP/' . phpversion();
            mail($to, $subject, $message, $headers);
            
        }else{
            
            $dataArray = array();
            $dataArray['code']           			            = $request->code;
          	$dataArray['providerReferenceId']           		= $request->providerReferenceId;
          	$dataArray['payment_status']           		        = 'C';
          
    		Loanpurchase::where('transactionId',$request->transactionId)->update($dataArray);
    		
    		$LoanpurchaseInfo = Loanpurchase::where('transactionId',$request->transactionId)->first();
    		$userInfo = User::where('id',$LoanpurchaseInfo->user_id)->first();
    		
    		$to      = $userInfo->email;
            $subject = 'Loan search purchase';
            $message = 'You have successfully Payment - transactionId - '.$request->transactionId. ' providerReferenceId -'.$request->providerReferenceId;
            
            $headers = 'From: thecooperativestrust@gmail.com' . "\r\n" .
                         'Reply-To: thecooperativestrust@gmail.com' . "\r\n" .
                         'X-Mailer: PHP/' . phpversion();
            mail($to, $subject, $message, $headers);
            
        }
		
		if($userInfo->role=='customer'){
		    
		    if(!empty($CoursepurchaseInfo->transactionId)){
		        return redirect('/customer/course-transaction-list')->with('success', 'You have successfully Payment!');
		    }else{
		        return redirect('/customer/transaction-list')->with('success', 'You have successfully Payment!');
		    }
		    
		    
		}elseif($userInfo->role=='cooperative'){
		    return redirect('/cooperative/transaction-list')->with('success', 'You have successfully Payment!');
		}
    }
  
  	
	
}
