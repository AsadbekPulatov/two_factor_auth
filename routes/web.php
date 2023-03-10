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
Route::get('register', function (){
    return view('auth.register');
});
Route::get('login', function (){
    return view('auth.login');
});
Route::post('register', [\App\Http\Controllers\AuthController::class,'register'])->name('register');
Route::post('login', [\App\Http\Controllers\AuthController::class,'login'])->name('login');
Route::post('check',[\App\Http\Controllers\AuthController::class,'check'])->name('check');
