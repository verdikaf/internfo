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

Route::get('/login', 'LoginController@index');
Route::post('/login/action', 'LoginController@loginAction');
// Route::get('/signup', 'LoginController@signup');
Route::post('/signup/action', 'LoginController@signupAction');

Route::get('/dashboard/pemagang', 'DashboardController@pemagang');
Route::get('/dashboard/admin', 'DashboardController@admin');
Route::get('/dashboard/perusahaan', 'DashboardController@perusahaan');

Route::get('/sign-out', 'DashboardController@signOut');
