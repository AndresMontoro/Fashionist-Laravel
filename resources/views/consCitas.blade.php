<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    font-family: arial, sans-serif;
    background-color: #e8e8e8;

}
header {
    background-color: #333;
    color: white;
    padding: 10px;
    text-align: center;
}

header h1 {
    margin: 0;
}

/* Estilos para el botón */
a {
    background-color: #e58b16;
    border: none;
    color: white;
    padding: 0.5em 1em;
    text-align: center;
    text-decoration: none;
    font-size: 1em;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
  }

/* Estilos para la tabla */
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

th {
    background-color: #e58b16;
    color: black;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}


    </style>
</head>
<body>
    <header><h1>Citas del mes seleccionado</h1></header>
    <main>
        <section>
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>id_us</th>
                        <th>nomb</th>
                        <th>telefono</th>
                        <th>id_pelu</th>
                        <th>fecha</th>
                        <th>hora</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($citas as $cita)
                    <tr>
                        <td>{{ $cita->id }}</td>
                        <td>{{ $cita->id_us }}</td>
                        <td>{{ $cita->nomb }}</td>
                        <td>{{ $cita->telefono }}</td>
                        <td>{{ $cita->id_pelu }}</td>
                        <td>{{ $cita->fecha }}</td>
                        <td>{{ $cita->hora }}</td>
                        <td>{{ $cita->created_at }}</td>
                        <td>{{ $cita->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br><br>
            <a class="boton" href="/consultar">Salir</a>
        </section>
    </main>
</body>

</html>