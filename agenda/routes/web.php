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
    return view('welcome');
});

Route::get('/ola', function () {
   return view('ola');
});

Route::get('/contatos',
    'App\Http\Controllers\ContatosController@listarContatos');

Route::get('/contatos/create',
    'App\Http\Controllers\ContatosController@create');

   
Route::post('/contatos/store',
    'App\Http\Controllers\ContatosController@store');

Route::get('/contatos/{contato}/edit',
    'App\Http\Controllers\ContatosController@edit')->name('contatos.edit');

Route::post('/contatos/{contato}',
    'App\Http\Controllers\ContatosController@update')->name('contatos.update');

