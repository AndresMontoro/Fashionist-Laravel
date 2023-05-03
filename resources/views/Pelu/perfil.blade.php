@extends('layouts.Principal')
@section('contenido')

<style>
    body
	{
        background-color: rgb(219,213,185);
    }

    button{
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
            margin-left: 40rem
        }
        
        button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
            color: #FFFFFF;
        }
          
        button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }
          
        button:hover span {
            padding-right: 20px;
        }
          
        button:hover span:after {
            opacity: 1;
            right: 0;
        }

  	.t-center
  	{
		text-align:center;
	}

	table
	{
		background-color: white;
		text-align: center;
		border-collapse: collapse;
		width: 50%;
		margin:0 auto;		/*Centrado para bloques*/
	}

	th, td 
	{
		border: solid 1px black;
		padding: 4px;
	}

	thead 
	{
		background-color: black;
		border-bottom: solid 5px;
		color: white;
	}

	tr:nth-child(even) 
	{
		background-color: #ddd;
	}

	tr:hover td
	{
		background-color: rgb(184, 146, 121);
		color: white;
	}	
</style>

<article class="t-center">
    <br><br>
    <table>
		<thead>
			<tr>
				<th colspan="2">TUS DATOS</th>
            </tr>
		</thead>

		<tr>
			<td>Nombre</td>
			<td>{{auth()->user()->name}}</td>
		</tr>
		<tr>
			<td>Teléfono</td>
			<td>{{auth()->user()->telefono}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{auth()->user()->email}}</td>
		</tr>
        <tr>
			<td>Rol</td>
			<td>{{auth()->user()->rol}}</td>
		</tr>
	</table>

    <br><br>

	@if (auth()->user()->rol == "admin")
    <div style="text-align: center;">
        <button >
            <a class="button" style="vertical-align:middle"  href="{{route('login')}}"><span>MENÚ ADMIN</span></a>
        </button>         
    </div>
	@endif
	<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" >Desconet.</button>
</form>

</article>

@endsection