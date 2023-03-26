<?php

use App\Http\Controllers\Adminlogincontroller;
use App\Http\Controllers\Productcontroller;
use App\Http\Controllers\Userlogincontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group(['prefix'=>'admin'],function(){
 Route::get('/login',[Adminlogincontroller::class,'viewlogin'])->name('view.login');
 Route::post('check',[Adminlogincontroller::class,'checklogin'])->name('success.login');

});
Route::get('success',function(){
    return 'you are login';
});
Route::get('register1',function(){
    return view('register1');
})->name('register');
Route::group(['prefix'=>'user'],function(){
    Route::get('/login',[Userlogincontroller::class,'viewlogin'])->name('view.login.user');
    Route::post('check',[Userlogincontroller::class,'checklogin'])->name('success.login.user');
    Route::get('edit',[Userlogincontroller::class,'edituser'])->name('edit.user');
    Route::post('update/{id}',[Userlogincontroller::class,'updateuser'])->name('update.userprofile');
   
   });
    ################################ --pages with functions-- ###################### 
 Route::get('product/{id}',[Productcontroller::class,'productview'] );
 
 Route::get('category/{id}',[Productcontroller::class,'categoryproduct'] );
 Route::get('homepage',[Productcontroller::class,'homepageproducts'] )->name('home.page');


 ################################ --pages not any functions-- ###################### 
 Route::get('categorypage',function(){
   return view(view:'categorypage');
})->name('category.page');

 Route::get('favoritepage',function(){
    return view(view:'favoritepage');
 })->name('favorite.page');
 Route::get('payment_method',function(){
    return view(view:'payment_method');
 })->name('payment.method.page');
 Route::get('bidding_me',function(){
    return view(view:'bidding');
 })->name('bidding.page');
 /*
 Route::get('category',function(){
    return view(view:'categorypage');
 })->name('category.page');
*/



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
