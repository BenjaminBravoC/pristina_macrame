<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//importar productos
use App\Http\Controllers\ProductosController;
//importar contactos
use App\Http\Controllers\ContactosController;
//importar materiales
use App\Http\Controllers\MaterialesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("categorias/get", [ProductosController::class, "getCategorias"]);
Route::get("tipos/get", [ContactosController::class, "getTipos"]);
Route::get("tipo/get", [MaterialesController::class, "getTipo"]);

//Para productos
Route::get("productos/get", [ProductosController::class, "getProductos"]);
Route::get("productos/filtrar", [ProductosController::class, "filtrarProductos"]);

Route::post("productos/post", [ProductosController::class, "crearProducto"]);
Route::post("productos/delete", [ProductosController::class, "eliminarProducto"]);

//Para contactos
Route::get("contactos/get", [ContactosController::class, "getContactos"]);
Route::get("contactos/filtrar", [ContactosController::class, "filtrarContactos"]);

Route::post("contactos/post", [ContactosController::class, "crearContacto"]);
Route::post("contactos/delete", [ContactosController::class, "eliminarContacto"]);

//Para materiales
Route::get("materiales/get", [MaterialesController::class, "getMateriales"]);
Route::get("materiales/filtrar", [MaterialesController::class, "filtrarMateriales"]);

Route::post("materiales/post", [MaterialesController::class, "crearMaterial"]);
Route::post("materiales/delete", [MaterialesController::class, "eliminarMaterial"]);