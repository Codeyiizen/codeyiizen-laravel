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
Route::get('/abouteUs',[App\Http\Controllers\HomeController::class,'abouteUs'])->name('aboutus');
Route::get('/career',[App\Http\Controllers\HomeController::class,'career'])->name('career');
Route::get('/portfolio',[App\Http\Controllers\HomeController::class,'portfolio'])->name('portfolio');
Route::get('/contactus',[App\Http\Controllers\HomeController::class,'contactus'])->name('contactus');
Route::post('/save/email',[App\Http\Controllers\HomeController::class,'saveEmail'])->name('save.email');
