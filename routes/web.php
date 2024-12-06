<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsonController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/Company', function () {
    return view('homePage');
});

Route::get('/', function() {
    return view('realEstate');
});

Route::get('/read-json', [JsonController::class, 'readJson']);
