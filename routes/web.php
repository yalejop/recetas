<?php

use App\Http\Controllers\RecetaController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'InicioController@index')->name('inicio.index');

Route::resource('/recetas', 'RecetaController');

//Route::get('/home', 'HomeController@index')->name('home');

//buscador de recetas
Route::get('/buscar', 'RecetaController@search')->name('buscar.show');

Route::get('/perfiles/{perfil}', 'PerfilController@show')->name('perfiles.show');

Route::get('/perfiles/{perfil}/edit', 'PerfilController@edit')->name('perfiles.edit');

Route::put('/perfiles/{perfil}', 'PerfilController@update')->name('perfiles.update');

//almacena los likes de las recetas
Route::post('/recetas/{receta}', 'LikesController@update')->name('likes.update');


Auth::routes();