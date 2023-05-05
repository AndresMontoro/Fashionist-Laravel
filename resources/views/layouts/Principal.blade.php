<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Peluqueria</title>
    <style>
    body{
      background-color: rgb(219,213,185);
    }
    header 
    {
      background: url(img/logo.jpg);
      background-size: cover;
      color: #fdfaf5;
      overflow: hidden;
      padding: 60px;
    }

    .boton{
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
		background-color: #ae9c8f;	/* AQUI */
		color: black;
	}	

</style>
</head>
<body> 

        <header id="titulo" style="text-align: center;">
            <h1>PELUQUERÍA FASHIONIST</h1>
            <button class="boton">
              <a href="{{route('index')}}">
              <img src="img/logo.jpeg" width="75px" height="75px" alt="logo" href="{{route('index')}}">
              </a>
            </button>
         </header>

    <nav class="nav nav-pills nav-justified"  style="background-color: rgba(192, 186, 153);">

        <a class="nav-link" style="color: rgba(0, 0, 0);" aria-current="page" href="{{route('informacion')}}">Precios</a>
        <a class="nav-link" style="color: rgba(0, 0, 0);" href="{{route('peinados')}}">Peinados</a>
        <a class="nav-link" style="color: rgba(0, 0, 0);" href="{{route('citas')}}">Citas</a>
        <a class="nav-link" style="color: rgba(0, 0, 0);" href="{{route('faqs')}}">FAQs</a>
        @if (Auth::check())
            <a class="nav-link" style="color: rgba(0, 0, 0);" href="{{route('perfil')}}">{{auth()->user()->name}}</a>
        @else
            <a class="nav-link" style="color: rgba(0, 0, 0);" href="{{route('login')}}">Login</a>
        @endif
    </nav>

            @yield('contenido')

        

        <!-- PIE DE PÁGINA -->
        <footer class="container">
             <p class="float-end">Todos los derechos reservados</a></p>
             <p>&copy; 2022–2023 Company, Inc. &middot;<a href="{{route('index')}}">Peluqueria_Fashionist</a> &middot; Copyrigth_ESI &copy</p>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</body>
</html>