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

Route::get('/api/{any}', function () {
    return view('welcome');
})->where('any', '.*');


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
Route::get('/dashboard/admin', 'DashboardController@admin');

// CRUD LOWONGAN -- PERUSAHAAN
Route::get('/perusahaan/lowongan', 'LowonganController@index');
Route::get('/perusahaan/lowongan/add', 'LowonganController@add');
Route::post('/perusahaan/lowongan/add/proses', 'LowonganController@addProses');
Route::get('/perusahaan/lowongan/detail/{id}', 'LowonganController@detail');
Route::get('/perusahaan/lowongan/pendaftar', 'LowonganController@pendaftar');
Route::get('/perusahaan/lowongan/pendaftar/detail', 'LowonganController@pendaftarDetail');
Route::get('/perusahaan/lowongan/pendaftar/lolos', 'LowonganController@pendaftarLolos');

// PEMAGANG
Route::get('/pemagang', 'PemagangController@index');
Route::get('/pemagang/detail/{id}', 'PemagangController@detail');
Route::post('/pemagang/apply/action', 'PemagangController@applyAdd');
Route::get('/pemagang/requirements/{id}', 'PemagangController@requirements');
Route::post('/pemagang/requirements/action', 'PemagangController@requirementsAdd');
Route::get('/pemagang/notification', 'PemagangController@notification');
Route::get('/pemagang/notification/detail', 'PemagangController@notificationDetail');