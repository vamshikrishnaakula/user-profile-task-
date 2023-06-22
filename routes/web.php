<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserwController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CertificateController;

////mail
// use App\Mail\Mailnotify;
// use Illuminate\Support\Facades\Mail;

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


// Route::get('certificatedata',[CertificateController::class, 'index']);
Route::get('/', function () {
    return view('login');
});

//Route::get('reg',[RegistrationController::class,'reg']);
Route::get('login',[UserController::class,'login'])->name('login');
Route::post('auth',[UserController::class,'authenticate']);
Route::get('profile',[UserController::class,'profile']);
//Route::view('profile-2','profile-2');
Route::get('logout',[UserController::class,'logout']);


//middleware
Route::group(['middleware'=>'disable'],function(){

    Route::group(['middleware'=>'auth'],function(){
        Route::get("about",[UserController::class,'indexx']);
        Route::get("help",[userwController::class,'dbcalling']);
        Route::get('Home', function () {
            return view('Home');
        })->middleware('auth');
        Route::post("submit",[userwController::class,'getData']);  
    
    });

});
// Route::get("profile",[userwController::class,'dbcalling']);
// Route::view('edit-profile','edit-profile');




//crud 

Route::get("delete/{id}",[userwController::class,'deletefunction']);
Route::get("edit/{id}",[userwController::class,'editfunction']);
Route::post("edit",[RegistrationController::class,'updatemethod']);
Route::get("vamshi",[userwController::class,'show']);

//reg

Route::post("submit",[userwController::class,'getData']);

// Route::view('registration','registration');

// Route::view('edit','edit');

Route::get('registration',[UserController::class,'reg']);
Route::post('regi',[RegistrationController::class,'reg']);

//password routes

Route::get('change-password', [UserController::class, 'changePassword']);
Route::post('postChangePassword', [UserController::class, 'changePasswordSave']);

//for mail

Route::get('email', [MailController::class, 'basic_email']);

//certificate routes

Route::get('certificatedata',[CertificateController::class, 'index']);

// Route::get('/',function (){
//     Mail::to('vamshipatel99@gmail.com')->send(new Mailnotify());
// });
