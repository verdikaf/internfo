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

// LOGIN
Route::get('/login', 'LoginController@index');
Route::get('/signup', 'LoginController@signup');
Route::get('/signup/perusahaan', 'LoginController@signupPerusahaan');

// DASHBOAORD
Route::get('/dashboard/pemagang', 'DashboardController@pemagang');
Route::get('/dashboard/admin', 'DashboardController@admin');

// CRUD PERUSAHAAN 
Route::get('/admin/perusahaan', 'PerusahaanController@index');
Route::get('/admin/perusahaan/add', 'PerusahaanController@add');
Route::get('/admin/perusahaan/add/proses', 'PerusahaanController@addProses');
Route::get('/admin/perusahaan/edit/{id}', 'PerusahaanController@edit');
Route::get('/admin/perusahaan/edit/proses', 'PerusahaanController@editProses');