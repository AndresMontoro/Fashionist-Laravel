@extends('layouts.Principal')
@section('contenido')
<article>
    <h2 id="reserva" class="titulo" style="background-color: #735945;" style="text-align: center;">RESERVA DE CITAS</h2>
    <a>
        <h5 class="t-center">Si usted aún no esta "Registrado" no podras realizar la reserva.</h5>
    </a>
    <hr class="featurette-divider">

    <form method="post" action="citas.php" style="text-align: center;">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>
        <br><br>
        <label for="peluquero">Peluquero:</label>
        <select id="peluquero" name="peluquero" required>
            <option selected="true" disabled="disabled" >Seleccione un Peluquero</option>

            <option value="Jorge">Jorge Fernández</option>
            <option value="Alvaro">Álvaro Cárdenas</option>
            <option value="Sergio">Sergio Contreras </option>

        </select>
        <br><br>
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>
        <br><br>
        <label for="hora">Hora:</label>
        <select id="hora" name="hora" required>
            <option selected="true" disabled="disabled">Seleccione una hora</option>
            <option value="09:00 AM">09:00</option>
            <option value="10:00 AM">10:00</option>
            <option value="11:00 AM">11:00</option>
            <option value="12:00 AM">12:00</option>
            <option value="01:00 PM">13:00</option>
            <option value="04:00 PM">16:00</option>
            <option value="05:00 PM">17:00</option>
            <option value="06:00 PM">18:00</option>
            <option value="07:00 PM">19:00</option>
        </select>
        <br><br>
        <!--Ahora mostramos el formulario si el usuario esta registrado-->
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