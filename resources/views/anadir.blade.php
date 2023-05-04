<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body {
  background-color: #f2f2f2;
  font-family: Arial, sans-serif;
}
h1 {
  text-align:center;
}
form {
  background-color: #ffffff;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  padding: 20px;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"],
input[type="email"],
input[type="password"],
input[type="rol"] {
  border: none;
  border-radius: 3px;
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.1);
  display: block;
  font-size: 16px;
  margin-bottom: 20px;
  padding: 10px;
  width: 100%;
}

button[type="submit"] {
  background-color: #FFA500;
  border: none;
  border-radius: 3px;
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.1);
  color: #ffffff;
  cursor: pointer;
  display: block;
  font-size: 16px;
  margin: 20px auto 0;
  padding: 10px;
  width: 100%;
}
button[onclick="window.location.href='/admin'"] {
  background-color: #FFA500;
  border: none;
  border-radius: 3px;
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.1);
  color: #ffffff;
  cursor: pointer;
  display: block;
  font-size: 16px;
  margin: 20px auto 0;
  padding: 10px;
  width: 100%;
}
button {
  display: block;
  margin: 0 auto;
}
    </style>
</head>

<body>
    <h1>Añadir usuario</h1>
    <form method="POST" action="{{ route('guardar_usuarios') }}">
        @csrf
        <label for="id">Id</label>
        <input type="text" name="id" id="id" required><br>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" required><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required><br>
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required><br>
        <label for="rol">Rol</label>
        <input type="text" name="rol" id="rol" required><br>
        <button type="submit" name="submit" value="add">Añadir</button><br>
        <button onclick="window.location.href='/admin'">Salir</button>
    </form>
    @if(session('message'))
      <div>{{session('message')}}</div>
    @endif
</body>
</html>

</html>