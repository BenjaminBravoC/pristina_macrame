<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//importamos el modelo
use App\Models\Materiale;

class MaterialesController extends Controller
{
    //
    public function getTipo(){
        $tipo = array();
        $tipo[] = "Cuerda de algodón";
        $tipo[] = "Tarugo";
        $tipo[] = "Barniz";
        $tipo[] = "Anilina de color";
        $tipo[] = "Cartón";
        $tipo[] = "Otro";

        return $tipo;
    }

    public function getMateriales(){
        //Funcion que va a buscar todos los materiale que hay en la BD y las retorna
        $materiales = Materiale::all();
        return $materiales;
    }


    public function filtrarMateriales(Request $request){
        $input = $request->all();
        $filtro = $input["filtro"];
        $materiales = Materiale::where("tipo", $filtro)->get();
        return $materiales;
    }

    public function crearMaterial(Request $request){
        //Funcion que registra un material en la BD
        $input = $request->all();
        $material = new Materiale();
        $material->contacto = $input["contacto"];
        $material->producto = $input["producto"];
        $material->nombre = $input["nombre"];
        $material->tipo = $input["tipo"];
        $material->cantidad = $input["cantidad"];
        $material->precio = $input["precio"];

        $material->save();
        return $material;
    }

    public function eliminarMaterial(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $material = Materiale::findOrFail($id);
        $material->delete();
        return "ok";
    }
}
