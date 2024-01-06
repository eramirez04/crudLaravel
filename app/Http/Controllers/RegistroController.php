<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Http\Requests\StoreRegistro;

class RegistroController extends Controller
{
    //

    public function index(){
        return view('crud.Registro');
    }

    public function store(StoreRegistro $request) {
        //Hola en la rama develop


        Usuario::create([
            'nombre_user' => $request-> nombre,
            'cedula_user' => intval($request-> cedula) ,
            'num_telefono' => $request -> telefono,
            'direccion_user' => $request ->direccion
        ]);

        return redirect() ->route('usuarios.index');
    }

    public function edit ($id){
        $usuario=Usuario::find($id);
        return view( 'crud.Editar',compact('usuario'));
    }


    public function update(StoreRegistro $request, $id) {

        $datos = request()->except('_token','_method');

       $usuario = Usuario::find($id);
       $usuario -> update($datos);

        return redirect()->route('usuarios.index');
    }

    public function destroy( $usuario) {
        //

        $post = Usuario::find($usuario);
        $post->delete();
        return redirect()->route('usuarios.index');

       // return redirect()->route('usuarios.index');
    }

}
