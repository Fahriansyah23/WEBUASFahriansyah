<?php

/*
/--------------------------------------------------------------------------
/ Web Router
/--------------------------------------------------------------------------
/
/ Here is where you can register web router for you application. These
/ router are Loaded by the RouteserviceProvider within a group which
/ countain the 'web' middleware group. Now create something great!
/
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//mahasiswa
Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('Tambah', 'TambahController@tambahdata');
Route::POST('simpan-mahasiswa', 'MahasiswaController@save')->name('simpan.mahasiswa');

Route::get('edit-mahasiswa/{id}', 'MahasiswaController@edit')->name('edit.mahasiswa');
Route::POST('update-mahasiswa/{id}', 'MahasiswaController@update')->name('update.mahasiswa');
Route::get('hapus-mahasiswa/{id}', 'MahasiswaController@delete')->name('hapus.mahasiswa');



//makul
Route::get('makul', 'MakulController@index')->name('makul');
Route::get('tambah-makul', 'MakulController@tambah');
Route::post('makul','MakulController@create');
Route::get('edit-makul/{id}', 'MakulController@edit')->name('makul.edit');
Route::post('update-makul/{id}', 'MakulController@update')->name('makul.update');
Route::get('hapus-makul/{id}', 'MakulController@destroy')->name('makul.hapus');

//nilai
Route::get('nilai', 'NilaiController@index')->name('nilai');
Route::get('tambah-nilai', 'NilaiController@tambah');
Route::post('nilai', 'NilaiController@create');
Route::get('edit-nilai/{id}', 'NilaiController@edit')->name('nilai.edit');
Route::post('update-nilai/{id}', 'NilaiController@update')->name('nilai.update');
Route::get('hapus-nilai/{id}', 'NilaiController@destroy')->name('nilai.hapus');
