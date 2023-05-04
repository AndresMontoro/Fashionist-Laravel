<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Estilos para el encabezado */
body{
  background-color: #e8e8e8;
  font-family: arial,sans-serif;
}
header {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 20px;
}

/* Estilos para el título principal */
h1 {
  margin: 0;
  font-size: 36px;
  text-align: center;
}

/* Estilos para el contenedor del formulario */
.form-container {
  margin: 20px auto;
  max-width: 600px;
  padding: 20px;
  background-color: #f1f1f1;
  border-radius: 10px;
}

/* Estilos para el formulario */
form {
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;
}

/* Estilos para las entradas de texto */
input[type="number"] {
  padding: 10px;
  margin-bottom: 10px;
  border: none;
  border-radius: 5px;
  background-color: #fff;
}

/* Estilos para los botones */
input[type="submit"] {
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #e98d2b;
  color: #fff;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #e98d2b;
}

/* Estilos para la tabla */
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #333;
  color: #fff;
}
</style>

</head>
    <header>
        <h1>Eliminar Usuario</h1>
    </header>
<body>
<h1>Introduce id de usuario</h1>
    <div class="form-container">
    <div>
        <form action="eliminar.php" method="post">
            <input type="number" id="id_usuario" name="id_usuario"><br>
            <input type="submit" value="Eliminar">
        </form>
        <form action="menuadmin.php">
            <input type="submit" value="Salir">
        </form>
    </div>
</body>
</html>