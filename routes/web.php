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

Route::get('/', [\App\Http\Controllers\PageController::class,'home']);
Route::post('/', [\App\Http\Controllers\CountriesController::class,'countries']);
Route::get('/product', [\App\Http\Controllers\PageController::class,'product']);
Route::post('send_email_for_price',[\App\Http\Controllers\MailController::class,'sendEmailPrice']);
Route::post('send_email_for_partner',[\App\Http\Controllers\MailController::class,'sendEmailPartner']);
Route::post('send_email_contact',[\App\Http\Controllers\MailController::class,'sendEmailContact']);
