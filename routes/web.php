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



Route::get('/index', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/today-special', [App\Http\Controllers\HomeController::class, 'today']);
Route::get('/menu', [App\Http\Controllers\HomeController::class, 'menu']);
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']);