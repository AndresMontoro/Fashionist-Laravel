<?php
    error_reporting(E_ERROR | E_PARSE);
    function comprobar_usuario($usuario)
    {
        // Conectamos con la base de datos
        $conexion = mysqli_connect("localhost", "admin", "admin", "peluqueria");

        // Para evitar inyecciones sql
        $sql = sprintf("SELECT * FROM usuarios WHERE usuario = '$usuario'");
        $consulta = mysqli_query($conexion, $sql);

        // Procesamos la consulta para guardarla posteriormente
        $dato = mysqli_fetch_array($consulta);

        if($dato['usuario'] == $usuario)
        {
            mysqli_close($conexion);

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
    $nombre = "";
    $correo = "";
    $telefono = "";
    $rol = "cliente";

    $mensaje = [];

    if (isset($_POST['registro']))
    {
        $usuario = $_POST['usuario'];
        $contrasennia = hash("sha256", $_POST['contrasennia'], false, []);  // Contraseña cifrada
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];

        if (!comprobar_usuario($usuario))
        {
            // Si no existe ya en la base de datos lo damos de alta
            $conexion = mysqli_connect("localhost", "admin", "admin", "peluqueria");
            $consulta = mysqli_query($conexion, "INSERT into usuarios (usuario, contrasennia, rol) VALUES ('$usuario', '$contrasennia', '$rol')");

            // Guardamos el id del usuario
            if ($consulta)
            {
                // Si la consulta se hace exitosamente

                // Guardamos el id del usuario
                $consulta = mysqli_query($conexion, "SELECT id_usuario FROM usuarios WHERE usuario = '$usuario'");
                $id = mysqli_fetch_array($consulta);

                if ($consulta)
                {
                    $consulta = mysqli_query($conexion, "INSERT into informacion (id_usuario, nombre, correo, telefono) VALUES ('$id[0]', '$nombre', '$correo', '$telefono')");
                    
                    if (!$consulta) // La consulta da error
                    {
                        $mensaje []= "red";
                        $mensaje []= "Error al añadir usuario: 0";
                    }

                    else
                    {
                        $mensaje []= "green";
                        $mensaje [] = "Usuario registrado";
                    }
                }

                else    // La consulta da error
                {
                    $mensaje []= "red";
                    $mensaje []= "Error al añadir usuario: 1";
                }
            }

            else    // La consulta da error
            {
                $mensaje []= "red";
                $mensaje []= "Error al añadir usuario: 2";
            }

            mysqli_close($conexion);
        }

        else    // Usuario ya existe
        {
            $mensaje []= "red";
            $mensaje []= "El usuario ya existe";
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
            
        <form action="Registrar.php" method="post">
            <img class="mb-4" src="img/logo.jpeg" alt="" width="125" height="125">
            
            <h1 class="h3 mb-3 fw-normal">Introduce tus datos</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="id_usuario" name="usuario"  required>
                <label for="floatingInput">Usuario</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="contrasennia" name="contrasennia"  required>
                <label for="floatingInput">Contraseña</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="nombre" name="nombre"  required>
                <label for="floatingInput">Nombre completo</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="correo" name="correo"  required>
                <label for="floatingInput">Correo</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="telefono_usuario" name="telefono"  required>
                <label for="floatingInput">Número de telefono</label>
            </div>

            <input type="submit" name="registro" value="Registrar usuario" />
            <?php 
                echo "<p style=\"color:$mensaje[0]\">$mensaje[1]</p>"; 
                ?>
        </form>
    </article>
</body>
</html>