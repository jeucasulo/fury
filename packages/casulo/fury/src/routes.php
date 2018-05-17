<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Casulo\Fury\FuryController@add');
Route::get('subtract/{a}/{b}', 'Casulo\Fury\FuryController@subtract');
