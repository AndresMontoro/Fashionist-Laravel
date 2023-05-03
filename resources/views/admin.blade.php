<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu administrador</title>
    <style>
            body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

h1 {
    background-color: #333;
    color: #fff;
    padding: 1em;
    text-align: center;
  }


div {
  display: flex;
  flex-direction: column; /* Cambia la dirección del flujo para que los botones estén uno debajo del otro */
  align-items: center;
  margin-top: 30px;
}

a {
  text-decoration: none;
  color: #fff;
  font-size: 16px;
  margin-top: 10px; /* Agrega un margen superior para separar los botones */
  padding: 10px 20px;
  background-color: #FFA500; /* Cambia el color de fondo a naranja */
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

a:hover {
  background-color: #FF8C00; /* Cambia el color de fondo en hover a un tono más oscuro de naranja */
}

/* Añade un espacio extra entre los botones para una mejor apariencia visual */
a + a {
  margin-top: 15px;
}

    </style>
</head><h1>Menu administrador</h1>
<body>
<div>
    <a class="boton" href="/consultar">Consultar</a>
    <a class="boton" href="/anadir">Añadir</a>
    <a class="boton" href="/eliminar">Eliminar</a>
    <a class="boton" href="/">Salir</a>
  </div>

   
</body>
</html>