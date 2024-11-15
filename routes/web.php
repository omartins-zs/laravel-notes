<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Hello World";
    // return view('welcome');
});

Route::get('/about', function () {
    echo "About";
    // return view('welcome');
});

Route::get('/main/{value}', [MainController::class, 'index']);
Route::get('/page2/{value}', [MainController::class, 'page2']);
Route::get('/page3/{value}', [MainController::class, 'page3']);
