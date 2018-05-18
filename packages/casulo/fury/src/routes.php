<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Casulo\Fury\FuryController@add');
Route::get('subtract/{a}/{b}', 'Casulo\Fury\FuryController@subtract');

// Route::get('/fury', 'Casulo\Fury\FuryController@index');


/* - - - fury routes - - - */ 
Route::get('/fury', ['uses' => 'Casulo\Fury\FuryController@index', 'as' => 'fury']);
Route::post('/fury/update-json-table', ['uses' => 'Casulo\Fury\FuryController@UpdateJsonTable', 'as' => 'fury.action']);
Route::post('/fury/update-routes', ['uses' => 'Casulo\Fury\FuryController@UpdateRoutes', 'as' => 'fury.update.routes']);
Route::post('/fury/update-files', ['uses' => 'Casulo\Fury\FuryController@UpdateFiles', 'as' => 'fury.update.files']);

Route::get('/fury/config', ['uses' => 'Casulo\Fury\FuryController@config', 'as' => 'fury.config']);
Route::post('/fury/update-config', ['uses' => 'Casulo\Fury\FuryController@UpdateConfig', 'as' => 'fury.update-config']);

Route::get('/fury/tables', ['uses' => 'Casulo\Fury\FuryController@tables', 'as' => 'fury.tables']);
Route::post('/fury/create-table', ['uses' => 'Casulo\Fury\FuryController@CreateTable', 'as' => 'fury.create-table']);
Route::post('/fury/update-tables', ['uses' => 'Casulo\Fury\FuryController@UpdateTable', 'as' => 'fury.update-tables']);

