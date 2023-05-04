<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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

input[type="text"]{
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
a {
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
  width: 93%;
  text-align: center;
  text-decoration: none;
}
</style>

<body>
<form method="GET" action="{{ route('eliminar_usuario') }}">
    @csrf
    <label for="id">ID del usuario:</label>
    <input type="text" name="id">
    <button type="submit">Eliminar</button><br>
    <a class="boton" href="/admin">Salir</a>
</form>
    @if(session('message'))
      <div>{{session('message')}}</div>
    @endif
</body>
</html>