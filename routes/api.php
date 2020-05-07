<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/bidangProfesi','BidangProfesiController@all');
// Route::get('/bidangProfesi/{id}','BidangProfesiController@show');
// Route::post('/bidangProfesi','BidangProfesiController@store');
// Route::put('/bidangProfesi/{id}','BidangProfesiController@update');
// Route::delete('/bidangProfesi/{id}','BidangProfesiController@delete');




// Route::middleware('auth:api')->get('user', function (Request $request) {
//     return $request->user();
// });

Route::get('pelamar', 'AdminController@pelamar');
Route::get('perusahaan', 'AdminController@index_perusahaan');
Route::get('bidangProfesi', 'AdminController@index');
Route::group(['prefix' => 'bidangProfesi'], function () {
    Route::post('add', 'AdminController@add');
    Route::get('edit/{id}', 'AdminController@edit');
    Route::post('update/{id}', 'AdminController@update');
    Route::delete('delete/{id}', 'AdminController@delete');
});