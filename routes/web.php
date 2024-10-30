<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome');});

Route::get('/abouts', function () { return view('screens.abouts');});
