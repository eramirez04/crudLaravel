<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class RegistroController extends Controller
{
    //

    public function index(){
        return view('crud.Registro');
    }

    public function store(Request $request) {
        //return $request;


        $this->validate($request,[
            'nombre' => 'required',
            'cedula' => 'required | numeric',
            'telefono' => 'required | numeric',
            'direccion' => 'required'
        ]);

        Usuario::create([
            'nombre_user' => $request-> nombre,
            'cedula_user' => intval($request-> cedula) ,
            'num_telefono' => $request -> telefono,
            'direccion_user' => $request ->direccion
        ]);

        return redirect() ->route('usuarios.index');

    }

    public function destroy(Usuario $usuario)
    {
        //

        Usuario::destroy($usuario);
    }

}
