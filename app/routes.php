<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
$NS= 'App\\Controllers\\';

//Route::get('/viewCamaba',$NS.'CamabaController@viewCamaba');
//$ns='App\\Controllers\\';

Route::get('/',$NS.'IndexController@index');
Route::get('/index',$NS.'IndexController@index');

Route::get('/camaba/view',$NS.'CamabaController@view');
Route::get('/camaba/add',$NS.'CamabaController@add');
Route::post('/camaba/proses_add',$NS.'CamabaController@add_proses');
Route::get('/camaba/delete/{id}',$NS.'CamabaController@delete_proses');
Route::get('/camaba/edit/{id}',$NS.'CamabaController@edit');
Route::post('/camaba/proses_edit/{id}',$NS.'CamabaController@edit_proses');

Route::get('/soal/view',$NS.'SoalController@view');
Route::get('/soal/add',$NS.'SoalController@add');
Route::post('/soal/proses_add',$NS.'SoalController@add_proses');
Route::get('/soal/delete/{id}',$NS.'SoalController@delete_proses');
Route::get('/soal/edit/{id}',$NS.'SoalController@edit');
Route::post('/soal/proses_edit/{id}',$NS.'SoalController@edit_proses');

Route::get('/nilai/view',$NS.'NilaiController@view');
Route::get('/nilai/add',$NS.'NilaiController@add');
Route::post('/nilai/proses/add',$NS.'NilaiController@addProses');
Route::get('/nilai/delete/{id}',$NS.'NilaiController@deleteProses');
Route::get('/nilai/edit/{id}',$NS.'NilaiController@edit');
Route::post('/nilai/proses_edit/{id}',$NS.'NilaiController@editProses');
//Route::get('/nilai/delete/{id}',$NS.'NilaiController@deleteProses');






