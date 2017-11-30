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

Route::get('songs', function(){
	// dd();
	return view('songs.add');
});		

Route::post('songs/file_upload', ['as'=>'songFileUpload','uses'=>'SongsController@uploadFile']);
