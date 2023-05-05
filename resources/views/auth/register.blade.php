@extends('layouts.Principal')
@section('contenido')
<x-guest-layout>

<style>
    button{
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
    color: #FFFFFF;
    background-color: #000000;
    border-radius: 4px;
    padding: 10px;
    width: 100px;
    }
    
    
    
    .t-center{
        text-align:center;
    }
    
        /* Estilos para el formulario */
    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #ae9c8f;
      padding: 20px;
      border: 1px solid #000000;
      border-radius: 5px;
      box-shadow: 10px 10px 10px 0px rgba(0, 0, 0, 0.1);
    }
    
    /* Estilos para los encabezados de fila */
    td[style="text-align:right;"] {
      font-weight: bold;
    }
    
    /* Estilos para las entradas de texto */
    input[type="text"], input[type="password"], input[type="tel"], input[type="email"]{
      width: 100%;
      padding: 8px;
      margin: 5px 0;
      border: 2px solid #000000;
      border-radius: 10px;
      box-sizing: border-box;
    }
    
     /*Estilos para el botón de envío*/ 
    input[type="submit"] {
      background-color: #000000;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: center;
    }
    
    
    /* Estilos para el mensaje de error */
    p {
      color: red;
      font-size: 12px;
      margin-top: 10px;
    }

    select:hover
    {
        background-color: rgb(196, 193, 192);
    }

    input[type="text"]:hover, input[type="tel"]:hover, input[type="date"]:hover, input[type="email"]:hover,
    input[type="password"]:hover
    {
        background-color: rgb(196, 193, 192);
    }

</style>
    <x-authentication-card>

    
    
        <!-- <x-slot name="logo"> -->
        <!--    <x-authentication-card-logo /> -->
        <!-- </x-slot> -->
       

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="Nombre:" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="telefono" value="Teléfono:" />
                <x-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')" required autofocus autocomplete="telefono" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="Correo:" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="Contraseña:" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="Confirmar contraseña:" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('Acepto los terminos de politica y privacidad', [
                                        'Terminos de politica' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terminos de politica').'</a>',
                                        'Terminos de privacidad' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('¿Aun no estas registrado?') }}
                </a>
            </div>
            
            <div style="text-align:right;">
                <x-button class="ml-4">
                    {{ __('Registro') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
@endsection