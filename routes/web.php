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
Route::get('/perusahaan/lowongan/add/proses', 'LowonganController@addProses');
Route::get('/perusahaan/lowongan/detail/{id}', 'LowonganController@detail');
Route::get('/perusahaan/lowongan/pendaftar', 'LowonganController@pendaftar');
Route::get('/perusahaan/lowongan/pendaftar/detail', 'LowonganController@pendaftarDetail');
Route::get('/perusahaan/lowongan/pendaftar/lolos', 'LowonganController@pendaftarLolos');

// PEMANGANG
Route::get('/pemagang/lowongan', 'LowonganController@index');
Route::get('/perusahaan/lowongan/add', 'LowonganController@add');
Route::get('/perusahaan/lowongan/add/proses', 'LowonganController@addProses');
Route::get('/perusahaan/lowongan/detail/{id}', 'LowonganController@detail');
Route::get('/perusahaan/lowongan/pendaftar', 'LowonganController@pendaftar');
Route::get('/perusahaan/lowongan/pendaftar/detail', 'LowonganController@pendaftarDetail');
Route::get('/perusahaan/lowongan/pendaftar/lolos', 'LowonganController@pendaftarLolos');

// PEMAGANG
Route::get('/pemagang/index', 'PemagangController@index');
Route::get('/pemagang/detail', 'PemagangController@detail');
Route::get('/pemagang/requirements', 'PemagangController@requirements');
Route::get('/pemagang/notification', 'PemagangController@notification');
Route::get('/pemagang/notification/detail', 'PemagangController@notificationDetail');



// PEMAGANG
Route::get('/pemagang/internship/index', function () {
    return view('pemagang_internship_list');
});
Route::get('/pemagang/internship/detail', function () {
    return view('pemagang_internship_detail');
});
Route::get('/pemagang/internship/requirements', function () {
    return view('pemagang_internship_requirements');
});
Route::get('/pemagang/internship/notification', function () {
    return view('pemagang_internship_notifikasi');
});
Route::get('/pemagang/internfship/notification/detail', function () {
    return view('pemagang_internship_detailnotif');
});