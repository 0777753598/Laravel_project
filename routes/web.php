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

//route::get('/test', testController@test_method);

Route::get('/login',['uses'=>'PagesController@login','as'=>'login']);

Route::get('/about','PagesController@about');

Route::get('/register','PagesController@register');

Route::post('/submit','UserController@Register');

Route::post('/userLogin','UserController@login');

Route::get('/dashboard',['middleware'=>'auth','as' => 'dashboard', 'uses'=> 'PagesController@dashboard']);

Route::get('/logout','PagesController@logout');