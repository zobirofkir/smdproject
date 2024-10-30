<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome');});

Route::get('/abouts', function () { return view('screens.abouts');});

Route::get('/services', function () { return view('screens.services');});

Route::get('/blogs', function () { return view('screens.blogs');});

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');