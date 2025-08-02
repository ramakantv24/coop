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
use App\Models\Testimonial;
use Mail;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');	
		
    }
	
	public function handle(Request $request, Closure $next)
	{
		dd('CheckLicense middleware is running');
	}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {	
		$courselist = Course::select('course.*')->orderBy('id', 'desc')->paginate(3);
        $testimonials = Testimonial::select('testimonial.*')->orderBy('id', 'desc')->get();
        
        return view('home',compact('courselist','testimonials'));
    }
	
	public function about_us()
    {	
		
        return view('about_us');
    }
  
  	public function signup()
    {
        return view('auth.register');
    }
	
	public function contact_us()
    {	
		
        return view('contact');
    }
	public function services()
    {
        return view('services');
    }
	
	public function terms_of_service()
    {	
        return view('terms_of_service');
    }
	
	public function privacy_policy()
    {
        return view('privacy_policy');
    }
    
    public function refund_policy()
    {
        return view('refund_policy');
    }
    
    public function risk_policy()
    {
        return view('risk_policy');
    }
	
	public function insurance()
    {	
		
        return view('insurance');
    }
	public function education()
    {	
		
        return view('education');
    }
	public function get_course()
    {	
		$courselist = Course::select('course.*')->orderBy('id', 'desc')->get();
        return view('course',compact('courselist'));
    }
	
	public function credit_report()
    {
		
          
         return view('credit_report');
        
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
	
}
