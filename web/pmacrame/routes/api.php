<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//importar
use App\Http\Controllers\ProductosController;

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

//Para productos
Route::get("productos/get", [ProductosController::class, "getProductos"]);
Route::get("productos/filtrar", [ProductosController::class, "filtrarProductos"]);

Route::post("productos/post", [ProductosController::class, "crearProducto"]);
Route::post("productos/delete", [ProductosController::class, "eliminarProducto"]);