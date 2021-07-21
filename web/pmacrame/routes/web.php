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

Route::view("/", "home")->name("home");
Route::view("/agregar_producto", "agregar_producto")->name("agregar_producto");
Route::view("/ver_productos", "ver_productos")->name("ver_productos");

Route::view("/agregar_cliente", "agregar_cliente")->name("agregar_cliente");
Route::view("/ver_clientes", "ver_clientes")->name("ver_clientes");

Route::view("/agregar_proveedor", "agregar_proveedor")->name("agregar_proveedor");
Route::view("/ver_proveedores", "ver_proveedores")->name("ver_proveedores");
