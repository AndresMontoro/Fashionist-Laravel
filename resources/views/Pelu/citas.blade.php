@extends('layouts.Principal')
@section('contenido')

<style>
    .t-center{
               text-align:center;
     }
   </style>
           
           
<article>
    <h2 class="t-center" id="reserva" class="titulo" style="background-color: #735945;" style="text-align: center;">RESERVA DE CITAS</h2>
    <a>
        <h5 class="t-center">Si usted aún no esta "Registrado" no podras realizar la reserva.</h5>
    </a>
    <hr class="featurette-divider">

    <form method="post" action="/guardar-cita" style="text-align: center;">
        @csrf
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>
        <br><br>
        <label for="peluquero">Peluquero:</label>
        <select id="peluquero" name="peluquero" required>
            <option selected="true" disabled="disabled" >Seleccione un Peluquero</option>

            <option value="1">Jorge Fernández</option>
            <option value="2">Álvaro Cárdenas</option>
            <option value="3">Sergio Contreras </option>

        </select>
        <br><br>
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>
        <br><br>
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
        <br><br>
        <!--Mostramos el submit, el request NuevaCita se encarga de autorizar o no el request-->
        <input type="submit" value="Enviar">
    
        <?php 

        $mensaje = [0, "aviso"];
        if ($mensaje[0]==1)
            {
            $aviso = $mensaje[1];
            echo "<p style=\"color:red\">$aviso</p>";
            }
        else
            {
                $aviso = $mensaje[1];
                echo "<p style=\"color:green\">$aviso</p>";}
        ?>
    </form>
</article>
@endsection