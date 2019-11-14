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
Route::get('/formulario/iniciarsesion', function(){
    return view('formulario.iniciarsesion');
});

Route::get('/formulario/iniciarsesioningresar', function(){
    return view('formulario.iniciarsesioningresar');
});

Route::get('/formulario/iniciarsesionrecuperar', function(){
    return view('formulario.iniciarsesionrecuperar');
});

Route::get('/formulario/clienteinfo', function(){
    return view('formulario.clienteinfo');
});

Route::get('/formulario/iniciarsesionrecuperarpro', function(){
    return view('formulario.iniciarsesionrecuperarpro');
});

Route::get('/formulario/iniciarsesioningresarpro', function(){
    return view('formulario.iniciarsesioningresarpro');
});