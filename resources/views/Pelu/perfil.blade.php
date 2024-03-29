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

	
</style>

@auth


<article class="t-center">
	<h2  class="t-center" id="fotos" class="titulo" style="background-color: black; color: white; text-align:center;">PERFIL DEL USUARIO {{auth()->user()->name}}</h2>
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
            <a class="button" style="vertical-align:middle"  href="{{route('admin')}}"><span>MENÚ ADMIN</span></a>
        </button>         
    </div>
	@endif
	<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" >Desconet.</button>
</form>

</article>

@else
<div>
    <img class="center" src="img/sad.png" alt="SAD" width="150" height="150">
</div>
<div class="alert alert-danger" style="vertical-align:middle"> 
        <ul>
            <li>TIENE QUE ESTAR LOGGEADO CAPO</li>
        </ul></div>

@endif
@endsection