<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;

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
    
    
    Route::get('/signup',function () {
        return view('pages/signup');
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

//media route
Route::post('/media/{id}','App\Http\Controllers\Profile_picController@mediafile')->name('media.perform');
Route::post('/update-image','App\Http\Controllers\Profile_picController@update_image')->name('update-image');
// home page route
Route::get('/profile', function () {
    return view('tutor/user_profile');
});
Route::get('/upgrade', function () {
    return view('tutor/upgrade');
});
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
//user 
Route::get('/media', function () {
    return view('tutor/media');
    
});

Route::get('/chat', function () {
    return view('pages/chat');
    
});
Route::get('/studentlist', function () {
    return view('pages/studentlist');
    
});
Route::get('/refferal', function () {
    return view('tutor/refferal');
    
});
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
//ends