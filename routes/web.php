<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Hello World";
    // return view('welcome');
});

Route::get('/about', function () {
    echo "About";
    // return view('welcome');
});
