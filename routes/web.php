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
Route::get('sakusei', 'App\Http\Controllers\SakuseiController@index');
Route::get('wadai', 'App\Http\Controllers\WadaiController@index');