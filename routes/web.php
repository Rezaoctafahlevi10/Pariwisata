<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',function(){
    return view ('Section');
});
Route::get('/logut',function(){
    return view ('Logout');
});
Route::get('/riwayat/tambah_riwayat',function(){
    return view('Form_tambahRiwayat');
});

Route::get('/index','App\Http\Controllers\WisataController@index');
Route::get('/index/hapus/{id}','App\Http\Controllers\WisataController@remove');
Route::get('/index/tambah','App\Http\Controllers\WisataController@create');
Route::post('/index/tambah','App\Http\Controllers\WisataController@createSave_Db');
Route::get('/index/edit{id}','App\Http\Controllers\WisataController@edit');
Route::post('/index/update','App\Http\Controllers\WisataController@updateSave_Db');
Route::get('/riwayat','App\Http\Controllers\RiwayatController@index');
Route::get('/riwayat/tambah_riwayat','App\Http\Controllers\RiwayatController@create');
Route::post('/riwayat/tambah_riwayat','App\Http\Controllers\RiwayatController@createSave_Db');
Route::get('/riwayat/hapus/{id}','App\Http\Controllers\RiwayatController@remove');