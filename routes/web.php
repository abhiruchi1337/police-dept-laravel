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
    return view('publichome');
});
Route::get('/data', 'MyController@index');
Auth::routes();
Route::get('/user', function(){
    return view('user_main');
})->middleware('auth','user');
Route::get('/newcomplaint', function(){
    return view('lodgecomplaint');
})->middleware('auth','user')->name('newcomplaint');
 
Route::get('/officer', function(){
    echo "Hello Officer";
})->middleware('auth','officer');
 
Route::get('/senior', function(){
    echo "Hello Senior Officer";
})->middleware('auth','senior');
Route::get('/home', 'HomeController@index')->name('home');
