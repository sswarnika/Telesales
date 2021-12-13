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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/customerdetails', function(){
	return view('customerdetails');
});

Route::get('/feedbacks', function(){
	return view('feedbacks');
});

Route::get('/booking', function(){
	return view('booking');
});

Route::get('/suitableoffers', function(){
	return view('suitableoffers');
});

Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('login');
});
