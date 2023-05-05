<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function guardar_usuarios(Request $request){

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->telefono = $request->input('telefono');
        $user->password = bcrypt($request->input('password'));  //Contraseña encriptada
        $user->rol = $request->input('rol');
        $user->save();

        return redirect('/anadir')->with('message', 'Usuario añadido');
    }

    public function eliminar_usuario(Request $request){

        $id = $request->input('id');
        User::where('id', $id)->delete();
        return redirect('/eliminar')->with('message', 'Usuario eliminado');
    }
}
