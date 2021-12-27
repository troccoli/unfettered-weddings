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

Route::view('/', 'home')->name('home');
//Route::view('/about-humanism', 'about-humanism')->name('about-humanism');
Route::view('/contact-me', 'contact-me')->name('contact-me');
Route::view('/unfettered-community', 'unfettered-community')->name('unfettered-community');
Route::view('/italiano', 'italiano')->name('italiano');
