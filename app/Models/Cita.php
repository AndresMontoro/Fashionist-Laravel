<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    
    protected $table = 'citas';

    // Agregar datos
    protected $fillable =['id_us', 'nomb', 'telefono', 'id_pelu', 'fecha', 'hora'];
}
