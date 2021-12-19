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

Route::get('/', 'App\Http\Controllers\Homepage@index')->name('homepage');
Route::get('/{entry}','App\Http\Controllers\Homepage@entry')->name('entry');
Route::middleware([])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
