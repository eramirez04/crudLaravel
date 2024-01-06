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
        //Hola en la rama develop


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

    public function edit ($id){
        $usuario=Usuario::find($id);
        return view( 'crud.Editar',compact('usuario'));
    }


    public function update(Request $request,$id) {

       //return $request;
       $this->validate($request,[
            'nombre' => 'required',
            'cedula' => 'required | numeric',
            'telefono' => 'required | numeric',
            'direccion' => 'required'
        ]);

       $usuario = Usuario::find($id);
       $usuario -> update($request->all());

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
