<?php

use Illuminate\Http\Request;

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
use App\Picture;

Route::get('pictures', 'PictureController@index');
Route::get('pictures/{picture}', 'PictureController@show');
Route::post('pictures', 'PictureController@store');
Route::put('pictures/{picture}', 'PictureController@update');
Route::delete('pictures/{picture}', 'PictureController@delete');
