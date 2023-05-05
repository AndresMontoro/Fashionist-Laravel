@extends('layouts.Principal')
@section('contenido')

<style>
    .t-center
    {
        text-align:center;
    }

    button
    {
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

    form
    {
        max-width: 400px;
        margin: 0 auto;
        background-color: #ae9c8f;
        padding: 20px;
        border: 1px solid #000000;
        border-radius: 5px;
        box-shadow: 10px 10px 10px 0px rgba(0, 0, 0, 0.1);
    }

    td[style="text-align:right;"] 
    {
        font-weight: bold;
    }

    input[type="text"], input[type="tel"], input[type="date"], select
    {
        width: 100%;
        padding: 8px;
        margin: 5px 0;
        border: 2px solid #000000;
        border-radius: 10px;
        box-sizing: border-box;
    }

    input[type="submit"] 
    {
        background-color: #000000;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: center;
    }

    select:hover
    {
        background-color: rgb(196, 193, 192);
    }

    input[type="text"]:hover, input[type="tel"]:hover, input[type="date"]:hover
    {
        background-color: rgb(196, 193, 192);
    }

</style>
           
           
<article>
    <h2 class="t-center" id="reserva" class="titulo" style="background-color: black; color: white; text-align:center;"">RESERVA DE CITAS</h2>
    <a>
        <h5 class="t-center">Si usted aún no esta "Registrado" no podras realizar la reserva.</h5>
    </a>
    <hr class="featurette-divider">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            <li>Le faltan campos por rellenar</li>
        </ul>
    </div>
@endif

    <form method="post" action="/guardar-cita" style="text-align: center;">
        @csrf
        
        @if(Auth::check())
        <div class="mt-4">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value ="{{ auth()->user()->name }}" required>
        </div>

        <div class="mt-4">
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" value ="{{ auth()->user()->telefono }}" required>
        </div>
        @else
        <div class="mt-4">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
           
        <div class="mt-4">
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>
        </div>
        @endif

        <div class="mt-4">
            <label for="id_pelu">Peluquero:</label>
            <select id="id_pelu" name="id_pelu" required>
                <option value="">Seleccione un Peluquero</option>
                <option value="1" {{ old('id_pelu') == '1' ? 'selected' : '' }}>Jorge Fernández</option>
                <option value="2" {{ old('id_pelu') == '2' ? 'selected' : '' }}>Álvaro Cárdenas</option>
                <option value="3" {{ old('id_pelu') == '3' ? 'selected' : '' }}>Sergio Contreras</option>
            </select>
        </div>

        <div class="mt-4">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha"value="{{old('fecha')}}" required>
        </div>

        <div class="mt-4">
            <label for="hora">Hora:</label>
            <select id="hora" name="hora" required>
                <option selected="true" disabled="disabled">Seleccione una hora</option>
                <option value="09:00:00">09:00</option>
                <option value="10:00:00">10:00</option>
                <option value="11:00:00">11:00</option>
                <option value="12:00:00">12:00</option>
                <option value="13:00:00">13:00</option>
                <option value="16:00:00">16:00</option>
                <option value="17:00:00">17:00</option>
                <option value="18:00:00">18:00</option>
                <option value="19:00:00">19:00</option>
            </select>
        </div>
        <!--Mostramos el submit, el request NuevaCita se encarga de autorizar o no el request-->
        <br>
        <div style="text-align:right;">
            <input type="submit" value="Enviar">
        </div>
    
        @if(session('mensaje'))
        <p style="{{session('mensaje')['c']}}">{{session('mensaje')['m']}}</p>
        @endif
    </form>
</article>
@endsection