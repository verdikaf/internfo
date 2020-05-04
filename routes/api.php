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


// Route::get('/bidang_profesi','BidangProfesiController@all');
// Route::get('/bidang_profesi/{id}','BidangProfesiController@show');
// Route::post('/bidang_profesi','BidangProfesiController@create');
// Route::put('/bidang_profesi/{id}','BidangProfesiController@update');
// Route::delete('/bidang_profesi/{id}','BidangProfesiController@delete');

Route::get('/admin/bidangProfesi','BidangProfesiController@all');
Route::get('/admin/bidangProfesi/{id}','BidangProfesiController@show');
Route::post('/admin/bidangProfesi','BidangProfesiController@create');
Route::put('/admin/bidangProfesi/{id}','BidangProfesiController@update');
Route::delete('/admin/bidangProfesi/{id}','BidangProfesiController@delete');

