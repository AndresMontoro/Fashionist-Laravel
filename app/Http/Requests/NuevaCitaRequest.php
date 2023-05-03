<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NuevaCitaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Aqui podriamos validar si el usuario esta registrado o no... (de momento siempre lo estara)
        // por lo tanto deberiamos de mostrar siempre el boton y esto se encarga de autorizar o no
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}
