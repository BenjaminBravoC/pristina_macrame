<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//importamos el modelo Producto
use App\Models\Producto;

class ProductosController extends Controller
{
    public function getCategorias(){
        $categorias = array();
        $categorias[] = "Espejo";
        $categorias[] = "Mural";
        $categorias[] = "Cartera";
        $categorias[] = "Ornamento";
        $categorias[] = "Otro";

        return $categorias;
    }

    public function getProductos(){
        //Funcion que va a buscar todos los productos que hay en la BD y las retorna
        $productos = Producto::all();
        return $productos;
    }

    public function crearProducto(Request $request){
        //Funcion que registra un producto en la BD
        $input = $request->all();
        $producto = new Producto();
        $producto->nombre = $input["nombre"];
        $producto->categoria = $input["categoria"];
        $producto->precio = $input["precio"];
        $producto->descripcion = $input["descripcion"];

        $producto->save();
        return $producto;
    }

    public function eliminarProducto(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return "ok";
    }
}
