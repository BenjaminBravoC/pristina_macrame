<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contacto;

class ContactosController extends Controller
{
    //
    public function getTipos(){
        $tipos = array();
        $tipos[] = "Cliente";
        $tipos[] = "Empleado";
        $tipos[] = "Proveedor";
        $tipos[] = "Otro";

        return $tipos;
    }

    public function getContactos(){
        $contactos = Contacto::all();
        return $contactos;
    }

    public function filtrarContactos(Request $request){
        $input = $request->all();
        $filtro = $input["filtro"];
        $contactos = Contacto::where("tipo", $filtro)->get();
        return $contactos;
    }

    public function crearContacto(Request $request){
        $input = $request->all();
        $contacto = new Contacto();
        $contacto->nombre = $input["nombre"];
        $contacto->tipo = $input["tipo"];
        $contacto->telefono = $input["telefono"];
        $contacto->direccion = $input["direccion"];

        $contacto->save();
        return $contacto;
    }

    public function eliminarContacto(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $contacto = Contacto::findOrFail($id);
        $contacto->delete();
        return "ok";
    }
}
