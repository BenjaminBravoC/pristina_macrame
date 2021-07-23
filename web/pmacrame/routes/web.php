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

Route::view("/agregar_contacto", "agregar_contacto")->name("agregar_contacto");
Route::view("/ver_contactos", "ver_contactos")->name("ver_contactos");

Route::view("/agregar_material", "agregar_material")->name("agregar_material");
Route::view("/ver_materiales", "ver_materiales")->name("ver_materiales");

Route::view("/agregar_venta", "agregar_venta")->name("agregar_venta");
Route::view("/ver_ventas", "ver_ventas")->name("ver_ventas");