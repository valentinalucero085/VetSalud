<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VetSalud</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>

<body>
    <div class="container">
        <h1>Turnos</h1>
        <form action="{{ route('turnos.buscar') }}" method="GET">
            <input type="text" name="mascota" placeholder="Buscar mascota">
            <button type="submit">Buscar</button>
        </form>
        <a href="{{ route('turnos.create') }}">Agregar turno</a>
        <ul>
            @foreach($turnos as $turno)
                <li>{{ $turno->mascota }} - {{ $turno->dueño }} - {{ $turno->fecha }} - {{ $turno->hora }}</li>
            @endforeach
        </ul>
    </div>
    <a href="{{ route('dashboard') }}">
        <button class="volver">Volver</button>
    </a>
    
</body>

</html>