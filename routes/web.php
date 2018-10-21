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
Route::get('/departments', function () {
    return view('departments');
});
Route::get('/safety', function () {
    return view('safety');
});
Route::get('/missing', function () {
    return view('missing');
});
Route::get('/contact', function () {
    return view('contact_us');
});
// Route::get('/data', 'MyController@index');
Auth::routes();
Route::group(['prefix' => 'user', 'middleware' => ['auth','user']],  function () {
    Route::get('/newcomplaint', 'UserController@newcomplaint')->name('newcomplaint');
    Route::post('/lodge', 'UserController@lodgecomplaint');
    Route::get('/', function(){
        return view('user_main');
    });
    Route::get('/complaints', 'UserController@viewcomplaints');
    Route::get('/complaints/{cid}', ['uses' =>'UserController@showComplaint', 'as'=>'singleComplaint']);
});

Route::group(['prefix' => 'officer', 'middleware' => ['auth','officer']],  function () {
    
    Route::get('/', 'OfficerController@index');
    Route::get('/cases', 'OfficerController@viewCases');
    Route::get('/cases/{cid}', ['uses' =>'OfficerController@showCase', 'as'=>'singleOfficerCase']);
    Route::match(['put', 'patch'], '/cases/{cid}/update',['uses' =>'OfficerController@updatecase', 'as'=>'updateOfficerCase']);
    
    Route::get('/newcase', 'OfficerController@newCase');
    Route::post('/lodge', 'OfficerController@lodgecomplaint');
});
// Route::get('/user', function(){
//     return view('user_main');
// })->middleware('auth','user');
Route::group(['prefix' => 'senior', 'middleware' => ['auth','senior']],  function () {
    
    Route::get('/', 'SeniorController@index');
    Route::get('/cases', 'SeniorController@viewCases');
    Route::get('/cases/{cid}', ['uses' =>'SeniorController@showCase', 'as'=>'singleCase']);
    Route::match(['put', 'patch'], '/cases/{cid}/update',['uses' =>'SeniorController@updatecase', 'as'=>'updateCase']);
    
    Route::get('/newcase', 'SeniorController@newCase');
    Route::post('/lodge', 'SeniorController@lodgecomplaint');
    Route::get('/newofficer', 'SeniorController@newOfficer');
    Route::post('/registerofficer', 'SeniorController@registerOfficer');
    Route::get('/officers', 'SeniorController@viewOfficers');
    Route::get('/officers/{oid}', ['uses' =>'SeniorController@showOfficer', 'as'=>'singleOfficer']);
    Route::match(['put', 'patch'], '/officers/{oid}/update',['uses' =>'SeniorController@updateOfficer', 'as'=>'updateOfficer']);
    // Route::get('/cases', 'OfficerController@viewCases');
    // Route::get('/cases/{cid}', ['uses' =>'OfficerController@showCase', 'as'=>'singleCase']);
    // Route::match(['put', 'patch'], '/cases/{cid}/update',['uses' =>'OfficerController@updatecase', 'as'=>'updateCase']);
    
    // Route::get('/newcase', 'OfficerController@newCase');
    // Route::post('/lodge', 'OfficerController@lodgecomplaint');
});

 
// Route::get('/officer', function(){
//     echo "Hello Officer";
// })->middleware('auth','officer');
 
// Route::get('/senior', function(){
//     echo "Hello Senior Officer";
// })->middleware('auth','senior');
Route::get('/home', 'HomeController@index')->name('home');
