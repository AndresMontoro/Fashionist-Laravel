<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Navegador extends Controller
{
    public function index(){
        return view ('Pelu.clientes');
    }

    public function peinados(){
        return view ('Pelu.peinados');
    }

    public function informacion(){
        return view ('Pelu.informacion');
    }

    public function citas(){
        return view ('Pelu.citas');
    }

    public function faqs(){
        return view ('Pelu.FAQs');
    }
}
