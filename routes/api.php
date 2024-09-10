<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', 'App\Http\Controllers\MyController@index');
Route::post('/test', 'App\Http\Controllers\MyController@store');
Route::post('/test/{id}', 'App\Http\Controllers\MyController@update');
Route::delete('/test/{id}', 'App\Http\Controllers\MyController@destroy');
