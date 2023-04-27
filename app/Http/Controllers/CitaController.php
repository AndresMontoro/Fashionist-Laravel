<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cita;
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
            $cita->nomb = $request->nomb;
            $cita->telefono = $request->telefono;
            $cita->id_pelu = $request->id_pelu;
            $cita->fecha = $request->fecha;
            $cita->hora = $request->hora;

            $cita->save;

            $mensaje = "Cita registrada";

            // Volvemos a la pagina de clientes
            return view('Pelu.clientes')->with('mensaje', $mensaje);
        }

        else
        {
            // Deberiamos de devolver la vista de citas con un mensaje de error
            $mensaje = "Debe iniciar sesion para poder añadir una cita";

            return view('Pelu.clientes')->with('mensaje', $mensaje);
        }

        
    }
}