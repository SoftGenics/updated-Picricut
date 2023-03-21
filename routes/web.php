<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Profile_picController;
use App\Http\Controllers\ticketController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\srequirementController;
use App\Http\Controllers\PersanalInfocontroller;
use App\Http\Controllers\QualificationController;
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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', function () {
    return view('pages/home');
});

Route::post('/login', 'LoginController@login')->name('login.perform');
Route::get('/register', 'RegisterController@show')->name('register.show');
Route::get('/logout', 'LogoutController@perform')->name('logout.now');
//category
Route::get('/category', function (){
    return view('pages/categories');

});
Route::post('/category', 'CategoryController@add')->name('category.perform');

Route::any('/update', 'RegisterController@updateuser')->name('update.perform');




    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
     


        

    });
    
    
    Route::get('/login', function(){
        return view('pages/signin');
    }
    )->name('login.show');
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        

        /**
         * Verification Routes
         */
        Route::get('/email/verify', 'VerificationController@show')->name('verification.notice');
        Route::get('/email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify')->middleware(['signed']);
        Route::post('/email/resend', 'VerificationController@resend')->name('verification.resend');
    });

    Route::group(['middleware' => ['auth','verified']], function() {
        /**
         * Dashboard Routes
         */
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
    });
});

Route::prefix('google')->name('google.')->group(function(){
    Route::get('auth/google',[GoogleController::class,'loginwithgoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');

});
Route::get('/dashboard', function () {
    return view('pages/dashboard');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

  
Route::controller(App\Http\Controllers\AuthOtpController::class)->group(function(){
    Route::get('otp/login', 'login')->name('otp.login');
    Route::post('otp/generate', 'generate')->name('otp.generate');
    Route::get('otp/verification/{user_id}', 'verification')->name('otp.verification');
    Route::post('otp/login', 'loginWithOtp')->name('otp.getlogin');
});

Route::get('my-notification/{type}', 'App\Http\Controllers\homeController@myNotification');


//student route begins
Route::get('/insight', function () {
    return view('student/analytics');
});
Route::get('/srefer', function () {
    return view('student/refferal');
});
Route::get('/scontact', function () {
    return view('student/contact');
});
Route::get('/sprofile', function () {
    return view('student/user_profile');
});
Route::get('/atutors', function () {
    return view('student/atutors');
});
Route::get('/ftutors', function () {
    return view('student/ftutors');
});
Route::get('/rtutors', function () {
    return view('student/rtutors');
});
Route::get('/stutors', function () {
    return view('student/stutors');
});
Route::get('/spostnew', function () {
    return view('student/spostnew');
});
Route::get('/fpostnew', function () {
    return view('student/fpostnew');
});
Route::get('/apostnew', function () {
    return view('student/apostnew');
});
Route::get('/schats', function () {
    return view('student/schats');
});
Route::get('/badges', function () {
    return view('student/badges');
});
//ends
Route::post('update-image',[Profile_picController::class,'update_image'])->name('update-image');
Route::post('details',[Profile_picController::class,'details_update'])->name('details-update');

Route::post('ticket',[ticketController::class,'ticket'])->name('ticket-add');
Route::post('addrequirment',[srequirementController::class,'addrequirment'])->name('add_requirment');

Route::delete('deleterequirement/{id}',[srequirementController::class,'deleterequirement'])->name('deleterequirement');
//ends
//tutor
Route::get('/profile', function () {
    return view('tutor/user_profile');
});
Route::get('/upgrade', function () {
    return view('tutor/upgrade');
});
Route::get('/analytics', function () {
    return view('tutor/analytics');
});
Route::get('/refferal', function () {
    return view('tutor/refferal');
});
Route::get('/media', function () {
    return view('tutor/media');
});
Route::get('/chat', function () {
    return view('tutor/chat');
});
Route::get('/chatus', function () {
    return view('tutor/chatus');
});
Route::get('/cont', function () {
    return view('tutor/contact');
});
Route::get('/slist', function () {
    return view('tutor/studentlist');
});
Route::get('/hslist', function () {
    return view('tutor/hslist');
});
Route::get('/testm', function () {
    return view('tutor/testm');
});
Route::get('/studentlist', function () {
    return view('pages/studentlist');
    
});
Route::get('/tasks', function () {
    return view('tutor/tasks');
});
// end tutor
//media route
Route::post('/media/{id}','App\Http\Controllers\Profile_picController@mediafile')->name('media.perform');

Route::post('tmedia',[TutorController::class,'upload_media'])->name('Tutor_media');
Route::post('addinfo',[PersanalInfocontroller::class,'addinfo'])->name('add_info');
//Route::get('update-image',[Profile_picController::class,'update_image'])->name('update-image');
Route::post('addQualification',[QualificationController::class,'addQualification'])->name('add_Qualification');



// home page route

Route::get('/tutors', function () {
    return view('pages/browse-tutor');
    
});
Route::get('/blog', function () {
    return view('pages/blog');
    
});
Route::get('/about', function () {
    return view('pages/about');
    
});

Route::get('/career', function () {
    return view('pages/career');
    
});
Route::get('/find-job', function () {
    return view('pages/find-job');
    
});
Route::get('/find-work', function () {
    return view('pages/find-work');
    
});
Route::get('/study-material', function () {
    return view('pages/study-material');
    
});
Route::get('/about', function () {
    return view('pages/about');
    
});

//Employee
Route::get('/spostnew', function () {
    return view('employer/spostnew');
});
Route::get('/ajobs', function () {
    return view('employer/ajobs');
});
Route::get('/rjobs', function () {
    return view('employer/rjobs');
});
Route::get('/sjobs', function () {
    return view('employer/sjobs');
});
Route::get('/fjobs', function () {
    return view('employer/fjobs');
});
Route::get('/candidates', function () {
    return view('employer/candidates');
});
Route::get('/itv', function () {
    return view('employer/itv');
});
Route::get('/resume', function () {
    return view('employer/resume');
});
Route::get('/econtact', function () {
    return view('employer/contact');
});
Route::get('/echat', function () {
    return view('employer/chat');
});
Route::get('/eprofile', function () {
    return view('employer/user_profile');
});

//job seeker

Route::get('/ajjobs', function () {
    return view('jobseeker/ajobs');
});
Route::get('/apjobs', function () {
    return view('jobseeker/apjobs');
});
Route::get('/comjobs', function () {
    return view('jobseeker/comjobs');
});
Route::get('/sjjobs', function () {
    return view('jobseeker/sjjobs');
});
Route::get('/jchats', function () {
    return view('jobseeker/chat');
});
Route::get('/ljobs', function () {
    return view('jobseeker/ljobs');
});
Route::get('/crv', function () {
    return view('jobseeker/crv');
});
Route::get('/train', function () {
    return view('jobseeker/train');
});
Route::get('/jchatus', function () {
    return view('jobseeker/chatus');
});
Route::get('/jrefer', function () {
    return view('jobseeker/jrefer');
});
Route::get('/jupgrade', function () {
    return view('jobseeker/upgrade');
});
Route::get('/jprofile', function () {
    return view('jobseeker/user_profile');
});
Route::get('/jcontact', function () {
    return view('jobseeker/contact');
});




