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
    return view('inicio.inicio');
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
Route::get('/iniciarsesion', function(){
    return view('formulario.iniciarsesion');
});

Route::get('/iniciarsesioningresar', function(){
    return view('formulario.iniciarsesioningresar');
});

Route::get('/iniciarsesionrecuperar', function(){
    return view('formulario.iniciarsesionrecuperar');
});

Route::get('/iniciarsesionrecuperarpro', function(){
    return view('formulario.iniciarsesionrecuperarpro');
});

Route::get('/iniciarsesioningresarpro', function(){
    return view('formulario.iniciarsesioningresarpro');
});

Route::get('/iniciarsesionpro', function(){
    return view('formulario.iniciarsesionpro');
});

Route::get('/proveedorinfo', function(){
    return view('formulario.proveedorinfo');
});
