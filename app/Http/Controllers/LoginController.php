<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use http\Client\Curl\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class LoginController extends Controller {

    public function index() {
        return view('login');
    }

    public function store(Request $request) {

        $this->validate($request,[
            'email' => 'required | email',
            'password' => 'required'
        ]);

      //  return $request;
        if (!auth()->attempt($request->only('email', 'password'))){
            return back()->with('mensaje','credenciales incorrectas');
        }

        return redirect()->route('usuarios.index');

    }


}
