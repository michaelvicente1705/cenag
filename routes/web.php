<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/sobre', function () {
    return view('about.index');
});
Route::get('/eventos', function () {
    return view('events.index');
});

