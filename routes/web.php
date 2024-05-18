<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});//:8000のlocalhostページのルートコード

/*Route::get('home', function () {
    return view('home.index');
});*/

Route::get('home', 'App\Http\Controllers\HomeController@index');
Route::get('create', 'App\Http\Controllers\createController@index');
Route::get('topic', 'App\Http\Controllers\topicController@index');
