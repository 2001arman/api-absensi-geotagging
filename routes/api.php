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

Route::post('login', "api\ApiController@login");
Route::post('logout', "api\ApiController@logout");

// http://127.0.0.1:8000/api/absen/ cekin
Route::post('absen', "api\AbsenController@tambahAbsen");

// http://127.0.0.1:8000/api/absen/{id} cekout
Route::put('absen/{id}', "api\AbsenController@keluarAbsen");

// http://127.0.0.1:8000/api/absen/data-absen riwayat
Route::post('data-absen', "api\AbsenController@index");

Route::post('sip-cuti', "api\SipCutiController@tambahCuti");
Route::post('data-cuti', "api\SipCutiController@index");
Route::delete('hapus-cuti/{id}', "api\SipCutiController@hapusCuti");

Route::post('sip-izin', "api\SipIzinController@tambahizin");
Route::post('data-izin', "api\SipIzinController@index");
Route::delete('hapus-izin/{id}', "api\SipIzinController@hapusizin");