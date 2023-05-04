<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Cita;
use App\Http\Requests\NuevaCitaRequest;

class CitaController extends Controller
{
    public function guardar(NuevaCitaRequest $request)
    {
        // Si el usuario ha iniciado sesion
        if (Auth::check())
        {
            // Creamos una cita
            $cita = new Cita;
            $cita->id_us = Auth::id();
            $cita->nomb = $request->nombre;
            $cita->telefono = $request->telefono;
            $cita->id_pelu = $request->peluquero;
            $cita->fecha = $request->fecha;
            $cita->hora = $request->hora;

            $cita->save();

            $mensaje=['m'=>'Cita registrada', 'c'=>'color:green'];

            // Volvemos a la pagina de clientes
            //return view('Pelu.citas')->with('mensaje', $mensaje);
        }

        else
        {
            // Deberiamos de devolver la vista de citas con un mensaje de error
            $mensaje=['m'=>'Debe iniciar sesion para poder añadir una cita', 'c'=>'color:red'];

        }
        return redirect()->route('citas')->with('mensaje', $mensaje);
        
    }
}
