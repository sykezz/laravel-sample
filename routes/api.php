<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', 'MyController@index');
Route::post('/test', 'MyController@store');
Route::put('/test/{id}', 'MyController@update');
Route::delete('/test/{id}', 'MyController@destroy');
