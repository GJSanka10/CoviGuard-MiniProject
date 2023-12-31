<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CitizenController;

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

//Welcome Page
Route::get('/',function(){
    return view('welcome');
});

//Home Page
Route::get('/home',function(){
    return view('home');
});

//Booking Page View
Route::get('/booking',function(){
    return view('booking');
});

//Database connect to Booking Page
Route::post('/saveBooking','App\Http\Controllers\BookingController@store');

//Verify for Booking Page View
Route::get('/verify', function () {
    return view('verify');
});

//Booking Succesfull Page View
Route::get('/complete', function () {
    return view('complete');
});

//Citizens Signup Page View
Route::get('/citizens',function(){
    return view('citizens');
});

//Database connect to Citizens Signup Page
Route::post('/saveCitizen','App\Http\Controllers\CitizenController@store');

//Officers Signup Page View
Route::get('/officers',function(){
    return view('officers');
});

//Citizens Login Page View
Route::get('/citizenLogin',function(){
    return view('citizenLogin');
});

//Officers Login Page View
Route::get('/officerLogin',function(){
    return view('officerLogin');
});

//Login Type Selection Page View
Route::get('/loginType',function(){
    return view('loginType');
});

//Register Type Selection Page View
Route::get('/registerType',function(){
    return view('registerType');
});
