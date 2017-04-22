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

Route::get('about', function () {
    return view('about');
});

Route::get('faq', function () {
    return view('faq');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('upload', function(){
	return view('upload');
});






Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('upload', 'upload@upload');   ///upload@upload as in   upload page @ upload controller
Route::post('store', 'upload@store');   ///upload@upload as in   upload page @ and store form action
//Route::post('upload', ['as'=>'upload.store','uses'=>'upload@upload']);
//Route::get('upload', ['as'=>'upload.store','uses'=>'upload@upload']);




//Route::get('/', function(){
//	return view('insertForm');

//});
//Route::post('/insert', 'Controller@index');