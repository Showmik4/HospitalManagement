<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;

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

//Route::get('/',[HomeController::class,'index']);
Route::get('/', 'HomeController@index') ;
Route::get('/home', 'HomeController@redirect')->middleware('auth','verified') ;

//=========================Doctor======================//
Route::get('/add_doctor_view', 'DoctorController@AddDoctor') ;
Route::post('/upload_doctor', 'DoctorController@Store') ;
Route::get('/show_doctor', 'DoctorController@show') ;
Route::get('/delete_doctor/{id}', 'DoctorController@destroy') ;
Route::get('/update_doctor/{id}', 'DoctorController@update') ;
Route::post('/edit_doctor/{id}', 'DoctorController@edit') ;
Route::get('/send_mail/{id}', 'DoctorController@Send_Mail') ;
Route::post('/sendemail/{id}', 'DoctorController@SendEmail') ;
//====================Appoinment=================//
Route::post('/appoinment', 'HomeController@Appoinment') ;
Route::get('/myappoinment', 'HomeController@myappoinment');
Route::get('/cancel_appoint/{id}', 'HomeController@cancel_appoint');

Route::get('/show_appoinment', 'DoctorController@showappoinment');
Route::get('/approve_appoint/{id}', 'DoctorController@approve_appoint');
Route::get('/cancelled_appoint/{id}', 'DoctorController@cancelled_appoint');

//Route::get('/home',[HomeController::class,'redirect']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
