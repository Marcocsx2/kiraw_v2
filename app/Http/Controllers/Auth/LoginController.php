<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login()
    {
        $credenciales =$this->validate(request(), [
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($credenciales)){
            return 'Tu sesion ha iniciado correctamente';
        }

        return back()->withErrors(['email'=>'Estas credenciales no hay en el registro']);
    }
}
