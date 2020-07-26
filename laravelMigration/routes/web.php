<?php

use App\formation_program;
use App\Http\Controllers\Formation_programsController;
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
// rutas de la tabla formation_programs
Route::get('cursos','Formation_programsController@select')->name('cursos.index');
Route::get('cursos/create','Formation_programsController@create')->name('cursos.create');
Route::post('cursos/data','Formation_programsController@data')->name('cursos.data');
Route::get('cursos/edit/{id}','Formation_programsController@edit')->name('cursos.edit');
Route::put('cursos/update/{id}', 'Formation_programsController@update')->name('cursos.update');
Route::delete('cursos/{id}','Formation_programsController@delete' )->name('cursos.delete');
// rutas de la tabla groups
Route::get('fichas','GroupsController@index')->name('fichas.index');
Route::get('fichas/create','GroupsController@create')->name('fichas.create');
Route::post('fichas/data','GroupsController@data')->name('fichas.data');
Route::get('fichas/edit/{id}','GroupsController@edit')->name('fichas.edit');
Route::put('fichas/update/{id}','GroupsController@update')->name('fichas.update');
Route::delete('fichas/{id}','GroupsController@delete')->name('fichas.delete');
// rutas de la tabla aprendices
Route::get('aprendices','ApprenticesController@index')->name('aprendices.index');
Route::get('aprendices/create','ApprenticesController@create')->name('aprendices.create');
Route::post('aprendices/data','GroupsController@data')->name('aprendices.data');
Route::get('apremdices/edit/{id}','GroupsController@edit')->name('aprendices.edit');
Route::put('apremdices/update/{id}','GroupsController@update')->name('aprendices.update');
Route::delete('apremdices/{id}','GroupsController@delete')->name('aprendices.delete');

