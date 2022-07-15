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

Route::get('all/{price}/{date}', 'AdsController@all')->middleware('cors');
Route::post('create', 'AdsController@create')->middleware('cors');
Route::get('one/{id}', 'AdsController@getOne')->middleware('cors');
