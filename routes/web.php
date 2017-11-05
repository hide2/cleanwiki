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

Route::get('/', 'WikiController@index');
Route::get('/wiki/{url}', 'WikiController@show');
Route::get('/new', 'WikiController@new');
Route::post('/create', 'WikiController@create');

Route::get('/demo', function () {
    return view('demo');
});
Route::get('/out', function () {
    return view('out');
});

Auth::routes();