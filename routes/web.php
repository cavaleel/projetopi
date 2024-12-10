<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/cadastro', function () {
    return view('admin.cadastro');
});


