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




Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/logout-ess-admin', function () {

    Auth::logout();

    return redirect()->route('login');

})->name('logout');

Route::post('/login/post', 'LoginController@post')->name('login.post');

Route::post('/form/post', 'PrincipalController@post_form')->name('form.post');


Route::group(['prefix' => 'administrador', 'middleware' => 'auth'], function () {

    include_once 'admin.php';

});





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/admin/login', function(){
	return redirect()->route('login');
});