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

Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);

Auth::routes();

Route::get('admin', function () {
    return view('admin.index');
});

Route::get('admin/portfolio', 'PortfolioController@index');
Route::get('admin/portfolio/create', 'PortfolioController@create');
Route::post('admin/portfolio/store', 'PortfolioController@store');
Route::get('admin/portfolio/edit/{id}', 'PortfolioController@edit');
Route::post('admin/portfolio/update/{id}', 'PortfolioController@update');
Route::get('admin/portfolio/destroy/{id}', 'PortfolioController@destroy');
Route::post('/send/mail', 'HomeController@mail');
