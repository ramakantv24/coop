<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Cooperative\CooperativeController;
use App\Http\Controllers\Customer\CustomerController; 
//use App\Http\Controllers\Customer\PhonepeController;
use App\Http\Controllers\PhonepeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

#ADMIN ROUTES
Route::group(['namespace' => 'Admin','prefix' => 'admin','middleware' => ['auth','admin']], function () {
	#DASHBOARD
	Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard.index');
	
	#GLOBAL SETTING
	Route::get('/setting', [AdminController::class, 'global_setting'])->name('dashboard.global_setting');
	Route::post('/global_setting_action', [AdminController::class, 'global_setting_action'])->name('dashboard.global_setting_action');
	
	#PROFILE
	Route::get('/profile', [AdminController::class, 'profile'])->name('dashboard.profile');
	Route::post('/update_profile', [AdminController::class, 'update_profile'])->name('dashboard.update_profile');
	
	#Change Password 
	Route::get('/change-password', [AdminController::class, 'change_password'])->name('dashboard.change_password');
	Route::post('/change_password_action', [AdminController::class, 'change_password_action'])->name('dashboard.change_password_action');
	
	#Cooperative
	Route::get('/cooperative', [AdminController::class, 'all_cooperative'])->name('dashboard.all_cooperative');
	Route::get('/add-cooperative', [AdminController::class, 'add_cooperative'])->name('dashboard.add_cooperative');
	Route::post('/add_cooperative_action', [AdminController::class, 'add_cooperative_action'])->name('dashboard.add_cooperative_action');
	Route::get('/cooperative/edit/{id}', [AdminController::class, 'edit_cooperative'])->name('dashboard.edit_cooperative');
	Route::post('/cooperative/edit_cooperative_action', [AdminController::class, 'edit_cooperative_action'])->name('dashboard.edit_cooperative_action');
	Route::get('/cooperative/delete/{id}', [AdminController::class, 'delete_cooperative'])->name('dashboard.delete_cooperative');
	
    #USERS
	Route::get('/users', [AdminController::class, 'all_users'])->name('dashboard.all_users');
	Route::get('/add-user', [AdminController::class, 'add_user'])->name('dashboard.add_user');
	Route::post('/add_user_action', [AdminController::class, 'add_user_action'])->name('dashboard.add_user_action');
	Route::get('/user/edit/{id}', [AdminController::class, 'edit_user'])->name('dashboard.edit_user');
	Route::post('/user/edit_user_action', [AdminController::class, 'edit_user_action'])->name('dashboard.edit_user_action');
	Route::get('/user/delete/{id}', [AdminController::class, 'delete_user'])->name('dashboard.delete_user');
	
	#loan
	Route::get('/loan/list', [AdminController::class, 'all_loan'])->name('dashboard.all_loan');
	Route::get('/loan/add', [AdminController::class, 'add_loan'])->name('dashboard.add_loan');
	Route::post('/add_loan_action', [AdminController::class, 'add_loan_action'])->name('dashboard.add_loan_action');
	Route::get('/loan/edit/{id}', [AdminController::class, 'edit_loan'])->name('dashboard.edit_loan');
	Route::post('/edit_loan_action', [AdminController::class, 'edit_loan_action'])->name('dashboard.edit_loan_action');
	Route::get('/loan/delete/{id}', [AdminController::class, 'delete_loan'])->name('dashboard.delete_loan');
	Route::get('/loan/download/{id}', [AdminController::class, 'download_loan'])->name('dashboard.download_loan');
  
	Route::get('/loan/import', [AdminController::class, 'loan_import'])->name('dashboard.loan_import');
	Route::post('/loan_import_action', [AdminController::class, 'loan_import_action'])->name('dashboard.loan_import_action');
    Route::get('/loan/import/delete/{id}', [AdminController::class, 'delete_loan_import'])->name('dashboard.delete_loan_import');
  	Route::get('/loan/import/update-status/{id}', [AdminController::class, 'update_loan_import_status'])->name('dashboard.update_loan_import_status');
  
  	Route::get('/insurance/list', [AdminController::class, 'all_insurance'])->name('dashboard.all_insurance');
  	Route::get('/insurance/update/{id}', [AdminController::class, 'insurance_update'])->name('dashboard.insurance_update');
	
	#COURSE
	Route::get('/course/list', [AdminController::class, 'all_course'])->name('dashboard.all_course');
	Route::get('/course/add', [AdminController::class, 'add_course'])->name('dashboard.add_course');
	Route::post('/add_course_action', [AdminController::class, 'add_course_action'])->name('dashboard.add_course_action');
	Route::get('/course/edit/{id}', [AdminController::class, 'edit_course'])->name('dashboard.edit_course');
	Route::post('/course/edit_course_action', [AdminController::class, 'edit_course_action'])->name('dashboard.edit_course_action');
	Route::get('/course/delete/{id}', [AdminController::class, 'delete_course'])->name('dashboard.delete_course');
	Route::get('/course/purchase/list', [AdminController::class, 'all_course_purchase'])->name('dashboard.all_course_purchase');
	Route::get('/course/receipt/download/{id}', [AdminController::class, 'download_course_receipt'])->name('dashboard.download_course_receipt');
	Route::get('/getcoursesubject/{id}', [AdminController::class, 'get_course_subject'])->name('dashboard.get_course_subject');
  	
  	#chapter
  	Route::get('/subject/add', [AdminController::class, 'add_subject'])->name('dashboard.add_subject');
  	Route::get('/subject/list', [AdminController::class, 'all_subject'])->name('dashboard.all_subject');
  	Route::get('/chapter/list', [AdminController::class, 'all_chapter'])->name('dashboard.all_chapter');
	Route::get('/chapter/add', [AdminController::class, 'add_chapter'])->name('dashboard.add_chapter');
	Route::post('/add_chapter_action', [AdminController::class, 'add_chapter_action'])->name('dashboard.add_chapter_action');
	Route::get('/chapter/edit/{id}', [AdminController::class, 'edit_chapter'])->name('dashboard.edit_chapter');
	Route::get('/subject/edit/{id}', [AdminController::class, 'edit_subject'])->name('dashboard.edit_subject');
	Route::post('/chapter/edit_chapter_action', [AdminController::class, 'edit_chapter_action'])->name('dashboard.edit_chapter_action');
	Route::get('/chapter/delete/{id}', [AdminController::class, 'delete_chapter'])->name('dashboard.delete_chapter');
	
	Route::get('/transaction-list', [AdminController::class, 'transaction_list'])->name('dashboard.transaction_list');
	Route::get('/download-loan-receipt/{id}', [AdminController::class, 'download_loan_receipt'])->name('dashboard.download_loan_receipt');
	Route::get('/course-transaction-list', [AdminController::class, 'course_transaction_list'])->name('dashboard.course_transaction_list');
  	
	#testimonial
	Route::get('/testimonial/list', [AdminController::class, 'all_testimonial'])->name('dashboard.all_testimonial');
	Route::get('/testimonial/add', [AdminController::class, 'add_testimonial'])->name('dashboard.add_testimonial');
	Route::post('/add_testimonial_action', [AdminController::class, 'add_testimonial_action'])->name('dashboard.add_testimonial_action');
	Route::get('/testimonial/edit/{id}', [AdminController::class, 'edit_testimonial'])->name('dashboard.edit_testimonial');
	Route::post('/testimonial/edit_testimonial_action', [AdminController::class, 'edit_testimonial_action'])->name('dashboard.edit_testimonial_action');
	Route::get('/testimonial/delete/{id}', [AdminController::class, 'delete_testimonial'])->name('dashboard.delete_testimonial');
	
	
	#REPORT
	Route::get('/reports', [ReportController::class, 'index'])->name('dashboard.rindex');
    Route::get('/reports/download/excel', [ReportController::class, 'download_excel'])->name('dashboard.download_excel');
	
    #LOGOUT
	Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);
});

#Cooperative ROUTES
Route::group(['namespace' => 'Cooperative','prefix' => 'cooperative','middleware' => ['auth','cooperative']], function () {
	#DASHBOARD
	Route::get('/dashboard', [CooperativeController::class, 'index'])->name('dashboard.index');
	
	#PROFILE
	Route::get('/profile', [CooperativeController::class, 'profile'])->name('dashboard.profile');
	Route::post('/update_profile', [CooperativeController::class, 'update_profile'])->name('dashboard.update_profile');
	
	#Change Password 
	Route::get('/change-password', [CooperativeController::class, 'change_password'])->name('dashboard.change_password');
	Route::post('/change_password_action', [CooperativeController::class, 'change_password_action'])->name('dashboard.change_password_action');
		
	#loan
	Route::get('/loan/list', [CooperativeController::class, 'all_loan'])->name('dashboard.all_loan');
	Route::get('/loan/add', [CooperativeController::class, 'add_loan'])->name('dashboard.add_loan');
	Route::post('/add_loan_action', [CooperativeController::class, 'add_loan_action'])->name('dashboard.add_loan_action');
	Route::get('/loan/edit/{id}', [CooperativeController::class, 'edit_loan'])->name('dashboard.edit_loan');
	Route::post('/edit_loan_action', [CooperativeController::class, 'edit_loan_action'])->name('dashboard.edit_loan_action');
	Route::get('/loan/delete/{id}', [CooperativeController::class, 'delete_loan'])->name('dashboard.delete_loan');
	Route::get('/loan/download/{id}', [CooperativeController::class, 'download_loan'])->name('dashboard.download_loan');
	
  
  	Route::get('/loan/search/list', [CooperativeController::class, 'loan_search'])->name('dashboard.loan_search');
  	Route::get('/loan/view/{id}', [CooperativeController::class, 'loan_view'])->name('dashboard.loan_view');
    Route::get('/loan/apply/{id}', [CooperativeController::class, 'loan_apply'])->name('dashboard.loan_apply');
  
  	#loan file
  	Route::get('/loan/import', [CooperativeController::class, 'loan_import'])->name('dashboard.loan_import');
	Route::post('/loan_import_action', [CooperativeController::class, 'loan_import_action'])->name('dashboard.loan_import_action');
	Route::get('/loan/import/delete/{id}', [CooperativeController::class, 'delete_loan_import'])->name('dashboard.delete_loan_import');
	
	Route::get('/transaction-list', [CooperativeController::class, 'transaction_list'])->name('dashboard.transaction_list');
	Route::get('/download-loan-receipt/{id}', [CooperativeController::class, 'download_loan_receipt'])->name('dashboard.download_loan_receipt');
	
    #LOGOUT
	Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);
});

#Customer ROUTES
Route::group(['namespace' => 'Customer','prefix' => 'customer','middleware' => ['auth','customer']], function () {
	#DASHBOARD
	Route::get('/dashboard', [CustomerController::class, 'index'])->name('dashboard.index');
	
	#PROFILE
	Route::get('/profile', [CustomerController::class, 'profile'])->name('dashboard.profile');
	Route::post('/update_profile', [CustomerController::class, 'update_profile'])->name('dashboard.update_profile');
	
	#Change Password 
	Route::get('/change-password', [CustomerController::class, 'change_password'])->name('dashboard.change_password');
	Route::post('/change_password_action', [CustomerController::class, 'change_password_action'])->name('dashboard.change_password_action');
	
	Route::get('/credit-report', [CustomerController::class, 'credit_report'])->name('credit_report');
	Route::get('/credit-report/view/{id}', [CustomerController::class, 'credit_report_view'])->name('credit_report_view');
	Route::get('/credit-report/download/{id}', [CustomerController::class, 'download_credit_report'])->name('dashboard.download_credit_report');
	
	Route::get('/course/view/{id}', [CustomerController::class, 'course_view'])->name('course_view');
	
	Route::get('/transaction-list', [CustomerController::class, 'transaction_list'])->name('dashboard.transaction_list');
	Route::get('/download-loan-receipt/{id}', [CustomerController::class, 'download_loan_receipt'])->name('dashboard.download_loan_receipt');
	Route::get('/course-transaction-list', [CustomerController::class, 'course_transaction_list'])->name('dashboard.course_transaction_list');
	Route::get('/download-course-receipt/{id}', [CustomerController::class, 'download_course_receipt'])->name('dashboard.download_course_receipt');
	Route::get('/course-purchase-list', [CustomerController::class, 'course_purchase_list'])->name('dashboard.course_purchase_list');
	Route::get('/course-chapter-view/{id}', [CustomerController::class, 'course_chapter_view'])->name('dashboard.course_chapter_view');
	            
	
    #LOGOUT
	Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about_us'])->name('about_us');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact_us');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/insurance', [App\Http\Controllers\HomeController::class, 'insurance'])->name('insurance');
Route::get('/education', [App\Http\Controllers\HomeController::class, 'education'])->name('education');
Route::get('/course', [App\Http\Controllers\HomeController::class, 'get_course'])->name('get_course');
Route::get('/terms-of-service', [App\Http\Controllers\HomeController::class, 'terms_of_service'])->name('terms_of_service');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/refund-policy', [App\Http\Controllers\HomeController::class, 'refund_policy'])->name('refund_policy');
Route::get('/risk-policy', [App\Http\Controllers\HomeController::class, 'risk_policy'])->name('risk_policy');
Route::get('/credit-report', [App\Http\Controllers\HomeController::class, 'credit_report'])->name('credit_report');


Route::post('/phonepe',[PhonepeController::class,'index']);
Route::any('/phonepe-response', [PhonepeController::class,'response']);

Route::get('/signup', [App\Http\Controllers\HomeController::class, 'signup'])->name('signup');


 
Route::get('cli/clear',function(){
	Artisan::call('cache:clear');
	Artisan::call('config:clear');
	Artisan::call('config:cache');
	return "clear";
});