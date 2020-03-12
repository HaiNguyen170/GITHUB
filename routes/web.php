<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[
    'as' =>'index',
    'uses'=> 'articleController@index',
]);

Route::get('/admin',[
    'as'=>'admin',
    'uses'=>'manageController@admin',
]);
Route::get('/admin/create',[
    'as'=>'create',
    'uses'=>'manageController@create',
]);
Route::get('/admin/edit', [
    'as'=>'edit',
    'uses'=>'manageController@edit',
]);
Route::post('/student',[
    'as'=>'store',
    'uses'=>'manageController@store',
]);
Route::get('/admin/{id}/edit',[
    'as'=>'edit',
    'uses'=>'manageController@edit',
]);

Route::put('/admin/{id}',[
    'as'=>'update',
    'uses'=>'manageController@update',
]);

Route::delete('/admin/{id}', [
    'as'=>'destroy',
    'uses'=>'manageController@destroy',
]);
Route::get('/admin/{id}',[
    'as'   => 'show',
    'uses' =>  'manageController@show',
]);

Route::get('/article/{id}',[
    'as'   => 'show',
    'uses' =>  'articleController@show',
]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
