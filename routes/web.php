<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', 'BlogController@index');

Route::get('/blog/buat', 'BlogController@buat');
Route::post('/blog', 'BlogController@tambah'); // maksud nya store setelah di buat

Route::get('/blog/{id}', 'BlogController@tampil');
Route::get('/blog/{id}/ubah', 'BlogController@ubah');
Route::put('/blog/{id}', 'BlogController@update');

Route::delete('/blog/{id}', 'BlogController@hapus');
