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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', 'DashboardController@index');

// LOGIN
Route::get('/login', 'LoginController@index');
Route::post('/login/action', 'LoginController@loginAction');

// SIGNUP
Route::get('/signup', 'LoginController@signup');
Route::post('/signup/pelamar/action', 'LoginController@signupPelamarAction');
Route::post('/signup/perusahaan/action', 'LoginController@signupPerusahaanAction');

Route::get('/sign-out', 'DashboardController@signOut');

// DASHBOARD
Route::get('/dashboard/perusahaan', 'DashboardController@perusahaan');
Route::get('/dashboard/pemagang', 'DashboardController@pemagang');
Route::get('/dashboard/admin/{any}', function () {
    return view('admin');
})->where('any','.*');
Route::get('/dashboard/aboutus', 'DashboardController@aboutus');

// CRUD LOWONGAN -- PERUSAHAAN
Route::get('/perusahaan/lowongan', 'LowonganController@index');
Route::get('/perusahaan/lowongan/add', 'LowonganController@add');
Route::post('/perusahaan/lowongan/add/proses', 'LowonganController@addProses');
Route::get('/perusahaan/lowongan/detail/{id}', 'LowonganController@detail');
Route::get('/perusahaan/lowongan/pendaftar/{id}', 'LowonganController@pendaftar');
Route::get('/perusahaan/lowongan/pendaftar/detail/{id}', 'LowonganController@pendaftarDetail');
Route::get('/perusahaan/lowongan/pendaftar/lolos/{id}/{lowongan}', 'LowonganController@pendaftarLolos');
Route::get('/perusahaan/lowongan/pendaftar/tolak/{id}/{lowongan}', 'LowonganController@pendaftarTolak');

// PEMAGANG
Route::get('/pemagang', 'PemagangController@index');
Route::get('/pemagang/detail/{id}', 'PemagangController@detail');
Route::post('/pemagang/apply/action', 'PemagangController@applyAdd');
Route::get('/pemagang/requirements/{id}', 'PemagangController@requirements');
Route::post('/pemagang/requirements/action', 'PemagangController@requirementsAdd');
Route::get('/pemagang/notification', 'PemagangController@notification');
Route::get('/pemagang/notification/detail/{id}/{status}', 'PemagangController@notificationDetail');

