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
    return view('welcome');
});

Route::get('/productos', function () {
    return view('Productos');
});

Route::get('/acerca', function () {
    return view('acerca');
});

Route::get( '/pedidos/index', function() {
  return view('pedidos.index');
});

Route::get( '/pedidos/store', function() {
  return view('pedidos.store');
});


Auth::routes();

Route::resource('pedido','PedidosController');

Route::get('/home', 'HomeController@index')->name('home');
