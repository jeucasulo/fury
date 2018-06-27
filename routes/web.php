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
// Route::get('/teste', function () {
//     return view('fury/teste2');
// });


/* - - - fury routes - - - */ 
Route::get('/fury', ['uses' => 'FuryController@index', 'as' => 'fury']);
Route::post('/fury/update-json-table', ['uses' => 'FuryController@UpdateJsonTable', 'as' => 'fury.action']);
Route::post('/fury/update-routes', ['uses' => 'FuryController@UpdateRoutes', 'as' => 'fury.update.routes']);
Route::post('/fury/update-files', ['uses' => 'FuryController@UpdateFiles', 'as' => 'fury.update.files']);

Route::get('/fury/config', ['uses' => 'FuryController@config', 'as' => 'fury.config']);
Route::post('/fury/update-config', ['uses' => 'FuryController@UpdateConfig', 'as' => 'fury.update-config']);

Route::get('/fury/tables', ['uses' => 'FuryController@tables', 'as' => 'fury.tables']);
Route::post('/fury/create-table', ['uses' => 'FuryController@CreateTable', 'as' => 'fury.create-table']);
Route::post('/fury/update-tables', ['uses' => 'FuryController@UpdateTable', 'as' => 'fury.update-tables']);

/*---------- BLOCK Controle CRUD----------*/
Route::get('/crud/controle', ['uses' => 'ControleController@index', 'as' => 'cruds.controle.index']);
Route::get('/crud/controle/show/{id}', ['uses' => 'ControleController@show', 'as' => 'cruds.controle.show']);
Route::get('/crud/controle/create', ['uses' => 'ControleController@create', 'as' => 'cruds.controle.create']);
Route::post('/crud/controle/store', ['uses' => 'ControleController@store', 'as' => 'cruds.controle.store']);
Route::get('/crud/controle/edit/{id}', ['uses' => 'ControleController@edit', 'as' => 'cruds.controle.edit']);
Route::put('/crud/controle/update/{id}', ['uses' => 'ControleController@update', 'as' => 'cruds.controle.update']);
Route::get('/crud/controle/destroy/{id}', ['uses' => 'ControleController@destroy', 'as' => 'cruds.controle.destroy']);
/*---------- BLOCK Controle CRUD----------*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
