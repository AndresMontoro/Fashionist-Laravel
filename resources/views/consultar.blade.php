<?php error_reporting(E_ERROR | E_PARSE);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
		body {
  font-family: Arial, sans-serif;
  background-color: #e8e8e8;
  font-size: 16px;
}

h1 {
  background-color: #333;
  color: #fff;
  padding: 1em;
  text-align: center;
}

form {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 30px;
}

label {
  margin-bottom: 1em;
  font-weight: bold;
  font-family: Arial, sans-serif;
}

select {
  padding: 0.5em;
  font-size: 1em;
  border-radius: 5px;
  border: 1px solid #ccc;
  background-color: #e6e6e6;
  margin-bottom: 1em;
}

button[type="submit"] {
  background-color: orange;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  border: none;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.3s ease;
}

button[onclick="window.location.href='/admin'"] {
  background-color: orange;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  border: none;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.3s ease;
  display: block;
  width: 100px; /* Ancho determinado del botón */
  height: 35px; /* Altura determinada del botón */
  margin: 0 auto;
}
</style>
</head>
<body>
<h1>Consultar citas</h1>
<form method="GET" action="{{ route('consCitas') }}">
  @csrf
  <label for="mes">Seleccione un mes:</label>
  <select id="mes" name="mes">
    <option value="1">Enero</option>
    <option value="2">Febrero</option>
    <option value="3">Marzo</option>
    <option value="4">Abril</option>
    <option value="5">Mayo</option>
    <option value="6">Junio</option>
    <option value="7">Julio</option>
    <option value="8">Agosto</option>
    <option value="9">Septiembre</option>
    <option value="10">Octubre</option>
    <option value="11">Noviembre</option>
    <option value="12">Diciembre</option>
  </select>
  <button type="submit">Consultar</button><br>
</form>
<button onclick="window.location.href='/admin'">Salir</button>
  
</body>
</html>