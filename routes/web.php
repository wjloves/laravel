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

/*前台*/
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/class', function () {
    return view('class');
});

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/notice', function () {
    return view('demo');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/FAQ', function () {
    return view('faq');
});


/*后台*/
Route::get('/home/login',function (){
  return view('s');
})->name('login');

Auth::routes();

Route::get('/404',function(){
	return view('404');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/ajaxClass', 'HomeController@getClass');

