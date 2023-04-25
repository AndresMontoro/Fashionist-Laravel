@extends('layouts.Principal')
@section('contenido')
<x-guest-layout>
    <x-authentication-card>

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
    
        <!-- <x-slot name="logo"> -->
        <!--    <x-authentication-card-logo /> -->
        <!-- </x-slot> -->
       

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
@endsection