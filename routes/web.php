<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/reservation', function () {
    return view('reservation');
});
Route::get('/deploy', function () {
    return view('welcome');
});
