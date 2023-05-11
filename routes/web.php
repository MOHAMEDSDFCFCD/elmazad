<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productcontroller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Userlogincontroller;
use App\Http\Controllers\Adminlogincontroller;



Route::group(['prefix' => 'admin'], function () {
   Route::get('/login', [Adminlogincontroller::class, 'viewlogin'])->name('view.login');
   Route::post('check', [Adminlogincontroller::class, 'checklogin'])->name('success.login');
});
Route::get('success', function () {
   return 'you are login';
});
Route::get('register_screen', function () {
   return view('register');
   
})->name('register');

Route::post('/submit-form', [RegisterController::class, 'submitForm'])->name('submitForm');

Route::group(['prefix' => 'user'], function () {
   Route::get('/login', [Userlogincontroller::class, 'viewlogin'])->name('view.login.user');
   Route::post('check', [Userlogincontroller::class, 'checklogin'])->name('success.login.user');
   Route::get('edit', [Userlogincontroller::class, 'edituser'])->name('edit.user');
   Route::post('update/{id}', [Userlogincontroller::class, 'updateuser'])->name('update.userprofile');
   Route::get('forgetpass', [Userlogincontroller::class, 'viewforgetpass'])->name('viewforgetpass.user');
   Route::post('checkforgetpass/{id}', [Userlogincontroller::class, 'forgetpass'])->name('forgetpass.user');
});
################################ --pages with functions-- ###################### 
Route::get('product/{id}', [Productcontroller::class, 'productview'])->name('product.page');

//Route::post('bidding_me/{id1}/{id2}',[Productcontroller::class,'biddingme'])->name('bidding.page');
Route::post('bidding_me/{id}', [Productcontroller::class, 'biddingme'])->name('bidding.page');

Route::get('category/{id}', [Productcontroller::class, 'categoryproduct'])->name('category.page');
Route::get('homepage', [Productcontroller::class, 'homepageproducts'])->name('home.page');
Route::get('favoritepage', [Productcontroller::class, 'favoritepageproducts'])->name('favorite.page');


################################ --pages not any functions-- ###################### 
/* Route::get('categorypage',function(){
   return view(view:'categorypage');
})->name('category.page');

 Route::get('favoritepage',function(){
    return view(view:'favoritepage');
 })->name('favorite.page');*/
Route::get('payment_method', function () {
   return view(view: 'payment_method');
})->name('payment.method.page');


Route::get('test', function () {
   return view(view: 'testsuccess');
});
/*
 Route::get('category',function(){
    return view(view:'categorypage');
 })->name('category.page');
*/



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
