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

Route::get('/bidangProfesi','BidangProfesiController@all');
Route::get('/bidangProfesi/{id}','BidangProfesiController@show');
Route::post('/bidangProfesi','BidangProfesiController@create');
Route::put('/bidangProfesi/{id}','BidangProfesiController@update');
Route::delete('/bidangProfesi/{id}','BidangProfesiController@delete');

// Route::middleware('auth:api')->get('user', function (Request $request) {
//     return $request->user();
// });

// Route::get('bidang_profesi', 'BidangProfesi@all');
// Route::group(['prefix' => 'bidangprofesi'], function () {
//     Route::post('add', 'BidangProfesi@add');
//     Route::get('edit/{id}', 'BidangProfesi@edit');
//     Route::post('update/{id}', 'BidangProfesi@update');
//     Route::delete('delete/{id}', 'BidangProfesi@delete');
// });