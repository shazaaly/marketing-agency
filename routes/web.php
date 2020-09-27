<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

//There routes returns views of main Site pages//
Route::get('/', '\App\Http\Controllers\Site\IndexController@index')->name('homePage');
Route::get('inner-page', '\App\Http\Controllers\Site\IndexController@innerPage')->name('innerPage');
Route::get('portfolio', '\App\Http\Controllers\Site\IndexController@portfolio')->name('portfolio');
Route::get('about', function (){
    return view('layouts.about');
})->name('about');
//end  routes returns views of main Site pages//

//Routes of paypal//
Route::get('Business-plan', '\App\Http\Controllers\Site\PaypalController@businessPlan')->name('businessPlan');
Route::get('enterprise-plan', '\App\Http\Controllers\Site\PaypalController@enterprisePlan')->name('enterprisePlan');



//End Routes of paypal//

//Jitsi Routes//
Route::get('talk-to-us', '\App\Http\Controllers\Site\JitsiController@joinMeeting')->name('joinMeeting');

//end Jitsi Routes//

//Contact Form Routes
Route::get('contact-us', '\App\Http\Controllers\ContactController@getContact');
Route::post('contact-us', '\App\Http\Controllers\ContactController@saveContact');

//end Contact Routes

//Calender Routes//
Route::get('calender', function (){
    return view('calender');
})->name('calender');

/*end Calender Routs*/












