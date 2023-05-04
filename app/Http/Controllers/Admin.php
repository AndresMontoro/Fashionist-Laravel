<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin extends Controller
{
    public function admin(){
        return view('admin');
    }

    public function consultar(){
        return view('consultar');
    }
    public function consCitas(Request $request){
        $mes = $request->mes;
        $citas = DB::table('citas')->whereMonth('fecha', $mes)->get();

        return view('consCitas')->with('citas', $citas);
    }
    public function anadir(){

        return view('anadir');
    }

    public function eliminar(){
        return view('eliminar');
    }
}
