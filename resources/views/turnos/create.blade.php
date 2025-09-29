<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear turno - VetSalud</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">

</head>

<body>
    <div class="container">
        <h1>Nuevo Turno</h1>
        <form action="{{ route('turnos.store') }}" method="POST">
            @csrf
            <label for="dueno">Nombre del dueño:</label>
            <input id="dueno" type="text" name="dueño" placeholder="Ingrese el Nombre del dueño" required>
            <label for="dueno">Nombre de la mascota:</label>
            <input id="mascota" type="text" name="mascota" placeholder="Ingrese el nombre de la mascota" required>
            <label for="fecha">Fecha:</label>
            <input id="fecha" type="date" name="fecha" required>
            <label for="hora">Hora:</label>
            <input id="hora" type="time" name="hora" required>
            <button type="submit">Guardar</button>
        </form>
    </div>
<a href="{{ route('dashboard') }}">
    <button class="volver">Volver</button>
</a>
</body>

</html>