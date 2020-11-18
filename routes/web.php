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

Route::get('/info', function () {
    phpinfo();
});

<<<<<<< HEAD
Route::any('/test1','TestController@test1');
Route::any('/test2','TestController@test2');  //测试2
Route::any('/AccessToken','TestController@AccessToken');
=======
Route::get('/test1','TestController@test1');
Route::get('/test2','TestController@test2');  //测试2
Route::any('/AccessToken','TestController@AccessToken');
>>>>>>> 9e550ab577710115296b0e39958b17d744ae2127
