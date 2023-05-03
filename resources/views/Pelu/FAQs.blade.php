@extends('layouts.Principal')
@section('contenido')


<style>
    body
	{
        background-color: rgb(219,213,185);
    }

    button
	{
		display: inline-block ;
		border-radius: 4px;
		background-color: #000000;
		border: none;
		color: #FFFFFF;
		text-align: center;
		font-size: 15px;
		padding: 10px;
		width: 100px;
		transition: all 0.5s;
		cursor: pointer;
		margin: 5px;
		margin-right: 40rem;
		margin-left: 40rem;
  	}

  	.t-center
  	{
		text-align:center;
	}


	a:link
	{
		color: black;
	}

	a:hover
	{
		color:rgb(184, 146, 121);
	}

	ul
	{
		list-style-type: none;
	}
	
</style>


<article class="t-center">
	<h2 id="localizacion" class="titulo" style="background-color: black; color: white; text-align:center;" >¿DÓNDE NOS ENCONTRAMOS?</h2>

	<h5 class="t-center">Aqui puedes encontrar información básica de la peluqueria como el Horario y Localización.</h5>
	
	<hr class="featurette-divider">

	<br>

	<table>
		<h4 class="t-center">HORARIO</h4>
		<thead>
			<tr>
				<th>Día</th>
				<th>Precio</th>
			</tr>
		</thead>

		<tr>
			<td>Lunes a Viernes</td>
			<td>9:00 - 13:30<br>16:30 - 19:00</td>
		</tr>
		<tr>
			<td>Sábado</td>
			<td>9:00 - 13:30</td>
		</tr>
		<tr>
			<td>Domingo</td>
			<td>Cerrado</td>
		</tr>
	</table>

   <br>

   <hr class="featurette-divider">

   <h4 class="t-center">INFORMACIÓN DE CONTACTO</h4>
   <ul>
		<li><a href="mailto:peluqueriafashionist@hotmail.com">Mándanos un correo: peluqueriafashionist@hotmail.com</a></li>
		<br>
		<li><a href="tel:+34616358819">Llámanos por teléfono: 616 358 819</a></li>
		<br>
		<li><a href="tel:+34695987760">Llámanos por teléfono: 695 987 760</a></li>
	</ul>

  	<hr class="featurette-divider">

	<h4 class="t-center">LOCALIZACIÓN</h4>

	<div style= "text-align: center";>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3205.6955228894203!2d-6.203803784863287!3d36.537339380003594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152f79854b8f0de1%3A0x8d075bd9e5895558!2sEscuela%20Superior%20de%20Ingenier%C3%ADa!5e0!3m2!1ses!2ses!4v1678782330793!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</article>
@endsection