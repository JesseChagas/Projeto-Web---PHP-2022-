<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;
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

Route::get('/ola', function () {
    return view('ola');
});

Route::get('/series', 'App\Http\Controllers\SeriesController@listarSeries');

Route::get('/series/criar', 'App\Http\Controllers\SeriesController@create');
Route::post('/series/store', 'App\Http\Controllers\SeriesController@store');
Route::post('/series/destroy/{serie}',
    'App\Http\Controllers\SeriesController@destroy')->name('series.destroy');

Route::get('/series/{serie}/edit',
    'App\Http\Controllers\SeriesController@edit')->name('series.edit');

Route::post('/series/{serie}',
    'App\Http\Controllers\SeriesController@update')->name('series.update');