<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome');});

Route::get('/abouts', function () { return view('screens.abouts');});

Route::get('/services', function () { return view('screens.services');});

Route::get('/blogs', function () { return view('screens.blogs');});