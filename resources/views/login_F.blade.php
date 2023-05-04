<?php
  // Quitamos los warnings e iniciamos la seion
  error_reporting(E_ERROR | E_PARSE);
  
    function comprobar_usuario($usuario, $contrasennia)
    {
        // Conectamos con la base de datos
        $conexion = mysqli_connect("localhost", "admin", "admin", "peluqueria");

        // Para evitar inyecciones sql
        $sql = sprintf("SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasennia = '$contrasennia'");
        $consulta = mysqli_query($conexion, $sql);

        // Procesamos la consulta para guardarla posteriormente
        $dato = mysqli_fetch_array($consulta);

        if($dato['usuario'] == $usuario && $dato['contrasennia'] == $contrasennia)
        {
            
            //$rol = $dato["...."];

            // Cerramos la conexion con la base de datos
            mysqli_close($conexion);

            /*
            //Genero un token a partir del rol + una cadena aleatoria
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $token = $consulta["rol"] . substr(str_shuffle($permitted_chars), 0, 11);
            mysqli_query("INSERT INTO token (id_usuario, token, fecha_fin) VALUES ($consulta["id_usuario"], $token, )");
            */

            // Creamos una sesion
            session_start();

            // Guardamos los datos en la sesion (usuario y rol)
            $_SESSION["sesion"] = $dato;
            //$_SESSION["rol"] = $rol;


            // Devuelvo true
            return true;
        }
        else
        {
            // No guardo nada
            return false;
        }
    }

    $usuario = "";
    $contrasennia = "";
    $mensaje = "";
    
    // Procesamos el formulario
    if (isset($_POST['conexion']))
    {
        $usuario = $_POST['usuario'];
        $contrasennia = hash("sha256", $_POST['contrasennia'], false, []);

        if(comprobar_usuario($usuario, $contrasennia))
        {
            // El usuario existe, vamos a otra pagina y detenemos el programa
            header('location: clientes.php');
            exit;
        }

        else
        {
            // El usuario no existe...
            $mensaje='Usuario o contraseñas incorrectos';

            // Mostrar de nuevo el formulario
        }
    }
?>

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
   .boton{
	display: inline-block ;
	border-radius: 4px;
	background-color: #000000;
	border: none;
	color: #000000;
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
</head>
<body> 

        <header id="titulo" style="text-align: center;">
            <h1>PELUQUERÍA FASHIONIST</h1>
            <button class="boton">
              <a href="{{route('clientes')}}">
              <img src="img/logo.jpeg" width="75px" height="75px" alt="logo" href="clientes.php">
              </a>
            </button>
         </header>

    <nav class="nav nav-pills nav-justified"  style="background-color: rgba(192, 186, 153);">

        <a class="nav-link" style="color: rgba(0, 0, 0);" aria-current="page" href="{{route('informacion')}}">Información</a>
        <a class="nav-link" style="color: rgba(0, 0, 0);" href="{{route('peinados')}}">Peinados</a>
        <a class="nav-link" style="color: rgba(0, 0, 0);" href="{{route('citas')}}">Citas</a>
        <a class="nav-link" style="color: rgba(0, 0, 0);" href="{{route('faqs')}}">FAQs</a>
        <a class="nav-link" style="color: rgba(0, 0, 0);" href="{{route('login_F')}}">Login</a>
    </nav>

    <article>
            <h2 id="fotos" class="titulo" style="background-color: #735945;">INTRODUCE TUS DATOS PARA ENTRAR</h2>



          <body class="text-center">

    <!--      
          <main class="form-signin w-25 m-auto">
            <form>
              <img class="mb-4" src="Fotos/logo.jpeg" alt="" width="125" height="125">
              <h1 class="h3 mb-3 fw-normal">Introduce tus datos</h1>
          
              <div class="form-floating">
                <input type="text" class="form-control" id="id_usuario" placeholder="12345" required>
                <label for="floatingInput">Id_usuario</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="Password" placeholder="Password" required>
                <label for="floatingPassword">Contraseña</label>
              </div>
          
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Recuerdame
                </label>
              </div>
              <button  class="button" type="submit" href="#">Entrar</button>
            </form>
          </main>
      -->
      <form action="login_F.php" method="post">
            <img class="mb-4" src="img/logo.jpeg" alt="" width="125" height="125">
              <h1 class="h3 mb-3 fw-normal">Introduce tus datos</h1>


              <div class="form-floating">
                <input type="text" class="form-control" id="id_usuario" name="usuario"  required>
                <label for="floatingInput">Nombre de Usuario</label>
              </div>

              
              <div class="form-floating">
                <input type="password" class="form-control" id="contrasennia" name="contrasennia" required>
                <label for="floatingPassword">Contraseña</label>
              </div>

             <input type="submit" name="conexion" value="Iniciar Sesión" />
                
             <!--   <table>
                    <tr>
                        <td style="text-align:right;">Usuario:</td>
                        <td><input type="text" name="usuario" /></td>
                    </tr>

                    <tr>
                        <td style="text-align: right;">Contraseña:</td>
                        <td><input type="password" name="contrasennia" required/>Contraseña</td>
                        <label for="contrasennia">Contraseña</label>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="text-align: right;"><input type="submit" name="conexion" value="Iniciar Sesión" /></td>
                    </tr>
                </table>

                -->
                <p style="color:red"><?php echo $mensaje; ?></p>
            </form>

            <br>
            <a href="{{route('registro')}}">Regístrate si no estás registrado</a>




    </article>


    <hr class="featurette-divider">
        <!-- PIE DE PÁGINA -->
        <footer class="container">
             <p class="float-end">Todos los derechos reservados</a></p>
             <p>&copy; 2022–2023 Company, Inc. &middot;<a href="{{route('clientes')}}">Peluqueria_Fashionist</a> &middot; Copyrigth_ESI &copy</p>
        </footer>
    
</html>
