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

Route::get('/', 'HomeController@index')->name('home');
//nome rotta
// ->name('home')
// {{ route('home) }}

//CRUD Route
//Route 7 metodi di ComicController
Route::resource('comics', 'ComicController');
//php artisan route:list