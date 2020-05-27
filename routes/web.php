<?php

use Illuminate\Support\Facades\Route;

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

//TODO endpoint de Bicicletas con funcion  'ShowBicicletas@get_Bicicletas')

//TODO endpoint de Bicicleta/{id} que recibe parametro, con funcion 'ShowBicicletas@get_Bicicleta')

//endpoint de Clientes correcto

Route::get('/', function () {
    return view('welcome');
});

//
Route::get('Bicicletas', 'ShowBicicletas@get_Bicicletas');
Route::get('Bicicleta/{id}', 'ShowBicicletas@get_Bicicleta');

Route::get('Clientes', 'ShowClientes@get_Clientes');