<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/propiedades', function () {
    return view('propiedades');
})->name('propiedades');

Route::get('/propiedades-detalle', function () {
    return view('propiedades-detalle');
})->name('propiedades-detalle');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
})->name('quienes-somos');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');