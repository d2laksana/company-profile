<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', ['type_menu' => 'home']);
});

Route::get('/about', function () {
    return view('pages.about', ['type_menu' => 'about']);
});

Route::get('/contact', function () {
    return view('pages.contact', ['type_menu' => 'contact']);
});
