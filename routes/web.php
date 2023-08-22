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

/**
 * Pagina pricipal
 */
Route::get('/', 'NavegadorController@mostrarHome');

/**
 * Login
 */
Route::get('login', 'NavegadorController@mostrarLogin');

/**
 * Carrito
 */
Route::get('carrito', 'CarritoController@showCarrito');

/**
 * Panel de Admin
 */
Route::get('admin', 'NavegadorController@mostrarPanelAdmin');


/**
 * Piezas
 */
//Lista de piezas
Route::get('piezas', 'PiezaController@listPiezas');
//Visualiza una pieza concreta
Route::get('piezas/{id}', 'PiezaController@showPieza');

Route::post('/piezas', 'PiezaController@searchPieza');

Route::get('piezasAdmin', 'PiezaController@listPiezasAdmin');

Route::post('piezasAdmin', 'PiezaController@postPieza');

Route::delete('piezasAdmin/{id}', 'PiezaController@deletePieza');

Route::get('piezasAdmin/{id}', 'PiezaController@formUpdatePieza');
Route::put('piezasAdmin/{id}', 'PiezaController@updatePieza');



/**
 * Categorias
 */
//Lista de categorias
Route::get('categorias', 'CategoriaController@listCategorias');
//Visualiza una categoria concreta
//Route::get('categorias/{id}', 'CategoriaController@showCategoria');

Route::post('categorias', 'CategoriaController@postCategoria');

Route::delete('categorias/{id}', 'CategoriaController@deleteCategoria');

Route::get('categorias/{id}', 'CategoriaController@formUpdateCategoria');
Route::put('categorias/{id}', 'CategoriaController@updateCategoria');

/**
 * Usuario
 */
//lista de usuario
Route::get('usuarios', 'UserController@listUsers');
//Visualiza un usuario concreto
//Route::get('usuarios/{id}', 'UserController@showUser');

Route::get('registro', 'UserController@showForm');

Route::post('registro', 'UserController@postUsuario');

Route::delete('usuarios/{id}', 'UserController@deleteUser');

Route::get('usuarios/{id}', 'UserController@formUpdateUser');
Route::put('usuarios/{id}', 'UserController@updateUser');