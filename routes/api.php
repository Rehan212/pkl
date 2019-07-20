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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('categories', 'CategoryAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::group(['middleware' => 'cors'], function () {
    Route::resource('siswa', 'SiswaController');
    Route::get('ucup', 'SiswaController@index2');
    Route::get('ekonomi', 'Ekonomi@index');
});
