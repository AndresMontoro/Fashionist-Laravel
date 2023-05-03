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
    input[type="text"],
    input[type="password"] {
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
    </style>

    <x-authentication-card>
        <!-- <x-slot name="logo"> -->
        <!--    <x-authentication-card-logo /> -->
        <!-- </x-slot> -->

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="Correo:" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="Contraseña:" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">Recuerdame</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('¿Has olvidado tu contraseña?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Entrar') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
@endsection