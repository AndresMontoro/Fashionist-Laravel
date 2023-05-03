<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            /* Estilos generales */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #e8e8e8;
  }
  
  h1 {
    text-align: center;
    margin-top: 50px;
  }
  
  form {
    width: 60%;
    margin: 0 auto;
    padding: 20px;
    background-color: #f5f5f5;
    border-radius: 10px;
  }
  
  label {
    display: block;
    margin-bottom: 10px;
  }
  
  input[type="text"],
  input[type="password"]{
    display: block;
    width: 90%;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    background-color: #fff;
  }
  
  input[type="submit"] {
    display: block;
    width: 50%;
    padding: 10px;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    border: none;
    border-radius: 5px;
    background-color: #e98d2b;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
  }
  /* Estilos para el botón Salir */
  button#salir {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 14px;
    padding: 5px 10px;
  }

  /* Estilos para el formulario */
  form {
    position: relative;
  }

</style>

</head>
<body>
    <h1>Añadir usuarios</h1>
    <div>
        <form action="{{ route('store')}}" method="post">
            @csrf
            <label for="id">Id</label>
            <input type="text" id="id" name="id" required><br>
            <label>Nombre</label>
            <input type="text" id="name" name="name" required><br>
            <label>Email</label>
            <input type="email" id="email" name="email" required><br>
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required><br>
            <label for="password2">Repita la contraseña</label>
            <input type="password" id="password" name="password" required><br>
            <label>Rol</label>
            <input type="text" id="rol" name="rol" required>
        </form>
            <button type="submit">Añadir</button>
    </div>
</body>
</html>