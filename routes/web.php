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

Route::get('/create', function () {
    return view('book.book');
});
Route::get('/', function () {
    return" <h1> haiiii </h1>";
});
Route::get('/users/{id}', function ($id) {
    return 'hai it is '.$id;
});
Route::get('/hi', function () {
    return view('welcome');
});
Route::get('/ab', 'SharesController@about'); 
Route::get('/ser', 'SharesController@service'); 
Route::get('/home', 'SharesController@index'); 
Route::resource('/book', 'BookController'); 
Route::resource('/stud', 'StudController'); 
Route::get('/sample', 'BookController@sample'); 

