<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Navegador extends Controller
{
    public function index(){
        return view ('Pelu.Clientes');
    }

    public function peinados(){
        return view ('Pelu.Peinados');
    }

    public function informacion(){
        return view ('Pelu.Informacion');
    }

    public function citas(){
        return view ('Pelu.Citas');
    }

    public function faqs(){
        return view ('Pelu.Faqs');
    }
}
