<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\OfferController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin') -> middleware('auth') -> group(function(){
    Route::get('/home', function() {
        return view('home');
    });
    Route::resource('trainees', 'TraineeController');
    Route::get('/trainees/{id}/certificate', 'TraineeController@certificateRequest')->name('certificate.request');
    Route::resource('offers', 'OfferController');
    });