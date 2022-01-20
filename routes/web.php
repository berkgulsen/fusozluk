<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['isLogin'])->group(function (){
    Route::get('/login','App\Http\Controllers\AuthController@login')->name('login');
    Route::post('/login','App\Http\Controllers\AuthController@loginPost')->name('login.post');
    Route::get('/register','App\Http\Controllers\AuthController@register')->name('register');
    Route::post('/register','App\Http\Controllers\AuthController@registerPost')->name('register.post');
});
Route::middleware(['isNotLogin'])->group(function (){
    Route::get('/logout','App\Http\Controllers\AuthController@logout')->name('logout');
    Route::post('/comment','App\Http\Controllers\EntryController@entryPost')->name('entry.post');
    Route::get('/myEntries','App\Http\Controllers\Homepage@myEntries')->name('myEntries');
});

Route::get('/dashboard', function () {
        return view('back.homepage');
    })->name('dashboard');

Route::get('/', 'App\Http\Controllers\Homepage@index')->name('homepage');
Route::get('/{entry}','App\Http\Controllers\Homepage@entry')->name('entry');


/*
Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
*/


