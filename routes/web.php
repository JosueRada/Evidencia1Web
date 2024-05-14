<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('todos.menu');
});

Route::get('/menu', function () {
    return view('todos.menu');
});

Route::get('/registro', function () {
    return view('todos.index');
});

Route::get('/mascotas', function () {
    return view('todos.mascotas');
});

Route::get('/nosotros', function () {
    return view('todos.nosotros');
});