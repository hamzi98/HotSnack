<?php
 use App\Http\Controllers\HomeController;
use App\Http\Controllers\Product;
use App\Http\Controllers\User;
use App\Http\Livewire\Code;
use App\Http\Livewire\OrderFood;
use App\Http\Livewire\UserAll;

use App\Http\Middleware\phone;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/order',[Product::class,'add'])->middleware(phone::class);
Route::post('/CheckCode',[Product::class,'CheckCode']);
Route::get('/ResendCode',[Product::class,'ResendCode']);
Route::get('/delete',[Product::class,'delete']);
Route::post('/SaveLocation',[Product::class,'SaveLocation']);
Route::get('/confirm',[Product::class,'confirm']);
Route::get('/menus',OrderFood::class)->middleware('auth');
Route::get('/MyOrder',[Product::class,'MyOrder']);
Route::post('/notes',[Product::class,'notes']);
Route::post('/contact',[HomeController::class,'contact']);

Route::get('/forgot',UserAll::class);

Route::get('/c',Code::class);




Route::get('/', function () {
return view('welcome');});
Route::get('/home', function () {
    return view('welcome');});
Route::get('/menu', function () {
return view('menu');});
Route::get('/about', function () {
return view('about');});
Route::get('/contact', function () {
return view('contact');});
    
Route::get('/wait', function () {
    return view('wait');});
    

    
