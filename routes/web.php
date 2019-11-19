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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', function (){
    return view('app');
});

Route::get('/Inicio', function(){
    return view('Inicio.inicio');
});
Route::get('/Compañia',function(){
    return view('Compañia.compañia');
});

Route::get('/Perfiles',function(){
    return view('Perfiles.perfiles');
});

Route::get('/Productos',function(){
    return view('Productos.productos');
});

Route::get('/Login', function(){
    return view('Formulario.iniciar_sesion');
});

Route::get('/Recuperar', function(){
    return view('Formulario.recuperar_cuenta');
});

Route::get('/Crear_cuenta', function(){
    return view('Formulario.crear_cuenta');
});

Route::get('/Carrito', function(){
    return view('Carrito.carrito');
});

Route::get('/Inicio_pro', function(){
    return view('Inicio_pro.inicio_pro');
});