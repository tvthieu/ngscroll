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
Route::get('hi', function() {
	return "ahihi";
});
Route::get('hoten/{ten}', function($ten){
	return "ten la $ten";
});
Route::get('hello', 'MyController@hello');

Route::get('getForm',function() {
	return view('postForm');
})->name('get');
Route::post('postForm',['as'=>'postForm','uses'=>'MyController@postForm']);
Route::post('post', function(){
	echo "string";
	return;
})-> name("post");
Route::post('form',['uses'=> 'MyController@handleRequest']);
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/auth/redirect/{provider}', 'SocialController@redirect');

Route::get('/callback/{provider}', 'SocialController@callback');