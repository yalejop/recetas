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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/recetas', 'RecetaController');

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/perfiles/{perfil}', 'PerfilController@show')->name('perfiles.show');

Route::get('/perfiles/{perfil}/edit', 'PerfilController@edit')->name('perfiles.edit');


Auth::routes();