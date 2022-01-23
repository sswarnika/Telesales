<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Http\Middleware\PreventBackHistory;

Route::get('/', function(){
   return view('welcome');
})->name('/');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('/customerdetails', [App\Http\Controllers\CustomersController::class, 'cdetail'])->name('customerdetails');

Route::resource('/editcustomerdetails', CustomerController::class);

Route::get('/feedbacks', [App\Http\Controllers\FeedbacksController::class, 'feedbacks'])->name('feedbacks');

Route::get('/booking', [App\Http\Controllers\BookingController::class, 'booking'])->name('booking');

Route::get('/suitableoffers', [App\Http\Controllers\OffersController::class, 'offers'])->name('offers');


Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('login');
});
