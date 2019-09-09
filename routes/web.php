<?php

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
    if(Auth::check()) {
        return redirect()->route('home');
    } 
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/registrasi', 'RegistrasiController@store')->name('saveseminar');
Route::get('/registrasi/delete/{id}', 'RegistrasiController@delete');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::get('/email', function () {
    return view('email2');
});
