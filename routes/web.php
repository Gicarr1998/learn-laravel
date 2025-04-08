<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return 'Hello, World!';
});

Route::get('orders', function(){
    return view('orders', ['name' => 'John Doe']);
});