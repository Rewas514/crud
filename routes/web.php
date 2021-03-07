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

Route::get('/', function () {
    return redirect('crud_show');
});

Route::get('crud_show','CrudController@show');
Route::get('crud_create','CrudController@create');
Route::get('crud_edit/{id}','CrudController@edit');
Route::post('crud_update/{id}','CrudController@update');
Route::post('crud_submit','CrudController@store');
Route::get('crud_delete/{id}','CrudController@destroy');

Route::get('template_show','TemplateController@show');
Route::get('template_create','TemplateController@create');
Route::get('template_edit/{id}','TemplateController@edit');
Route::post('template_update/{id}','TemplateController@update');
Route::post('template_submit','TemplateController@store');
Route::get('template_delete/{id}','TemplateController@destroy');

