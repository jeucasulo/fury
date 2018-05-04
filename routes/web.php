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


// Route::get('/', function () { return view('welcome'); });
Route::get('/fury', ['uses' => 'FuryController@index', 'as' => 'fury']);
Route::post('/fury/update-json-table', ['uses' => 'FuryController@UpdateJsonTable', 'as' => 'fury.action']);
Route::post('/fury/update-routes', ['uses' => 'FuryController@UpdateRoutes', 'as' => 'fury.update.routes']);
Route::post('/fury/update-files', ['uses' => 'FuryController@UpdateFiles', 'as' => 'fury.update.files']);

/*---------- BLOCK Usuario CRUD----------*/
Route::get('/crud/usuario', ['uses' => 'UsuarioController@index', 'as' => 'cruds.usuario.index']);
Route::get('/crud/usuario/show/{id}', ['uses' => 'UsuarioController@show', 'as' => 'cruds.usuario.show']);
Route::get('/crud/usuario/create', ['uses' => 'UsuarioController@create', 'as' => 'cruds.usuario.create']);
Route::post('/crud/usuario/store', ['uses' => 'UsuarioController@store', 'as' => 'cruds.usuario.store']);
Route::get('/crud/usuario/edit/{id}', ['uses' => 'UsuarioController@edit', 'as' => 'cruds.usuario.edit']);
Route::put('/crud/usuario/update/{id}', ['uses' => 'UsuarioController@update', 'as' => 'cruds.usuario.update']);
Route::get('/crud/usuario/destroy/{id}', ['uses' => 'UsuarioController@destroy', 'as' => 'cruds.usuario.destroy']);
/*---------- BLOCK Usuario CRUD----------*//*---------- BLOCK Paciente CRUD----------*/
Route::get('/crud/paciente', ['uses' => 'PacienteController@index', 'as' => 'cruds.paciente.index']);
Route::get('/crud/paciente/show/{id}', ['uses' => 'PacienteController@show', 'as' => 'cruds.paciente.show']);
Route::get('/crud/paciente/create', ['uses' => 'PacienteController@create', 'as' => 'cruds.paciente.create']);
Route::post('/crud/paciente/store', ['uses' => 'PacienteController@store', 'as' => 'cruds.paciente.store']);
Route::get('/crud/paciente/edit/{id}', ['uses' => 'PacienteController@edit', 'as' => 'cruds.paciente.edit']);
Route::put('/crud/paciente/update/{id}', ['uses' => 'PacienteController@update', 'as' => 'cruds.paciente.update']);
Route::get('/crud/paciente/destroy/{id}', ['uses' => 'PacienteController@destroy', 'as' => 'cruds.paciente.destroy']);
/*---------- BLOCK Paciente CRUD----------*/