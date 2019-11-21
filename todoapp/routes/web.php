<?php




Route::get('/', 'TasksController@index');

Auth::routes();

Route::get('/task','TasksController@add');
Route::post('/task','TasksController@create');

Route::get('/task/{task}','TasksController@edit');
Route::post('/task/{task}','TasksController@update');