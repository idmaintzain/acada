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

Route::get('htmltutorial', function(){
	return view('htmltutorial');
});

Route::get('phptutorial', function(){
	return view('phptutorial');
});

Route::get('javatutorial', function(){
	return view('javatutorial');
});

Route::get('allvideo', function(){
	return view('allvideo');
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


Route::get('login/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\RegisterController@handleProviderCallback');

//Route::get('google', function () {
  //  return view('googleAuth');
//});
Route::get('login/google', 'Auth\RegisterController@redirectToGoogle');
Route::get('login/google/callback', 'Auth\RegisterController@handleGoogleCallback');