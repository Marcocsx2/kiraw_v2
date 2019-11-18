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

Route::get('/inicio', function(){
    return view('Inicio.inicio');
});
Route::get('/compañia',function(){
    return view('Compañia.compañia');
});

Route::get('/perfiles',function(){
    return view('Perfiles.perfiles');
});

Route::get('/productos',function(){
    return view('Productos.productos');
});
Route::get('/crear_cuenta', function(){
    return view('Formulario.crear_cuenta');
});

Route::get('/login', function(){
    return view('Formulario.iniciar_sesion');
});

Route::get('/recuperar', function(){
    return view('Formulario.recuperar_cuenta');
});

Route::get('/crear_cuenta_proveedor', function(){
    return view('Formulario.crear_cuenta_proveedor');
});

Route::get('/proveedorinfo', function(){
    return view('formulario.proveedorinfo');
});
