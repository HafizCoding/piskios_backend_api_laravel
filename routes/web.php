<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;


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

//rute view untuk coba tampilan
Route::view('/cobanavbar','navbar');
Route::view('/home','tampilan.home');
Route::view('/login','tampilan.login');
Route::view('/register','tampilan.register');

//rute crud data user
Route::resource('users', ControllerPulsaUser::class);
Route::get('cetakpdf','ControllerPulsaUser@cetakpdf')->name('cetakpdf');

//view admin
Route::resource('admins', ControllerPulsaAdmin::class);