<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-VetSalud</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>

<body>
    <div class="container">
        <h2>Bienvenido, <br> elija una opción:</h2>
        <div class="crear-turno">
            <a href="{{ route('turnos.create') }}">
                <button>Crear turno</button>
            </a>
        </div>
        <div class="buscar-turno">
            <a href="{{ route('turnos.buscar') }}">
                <button>Buscar Mascota</button>
            </a>
        </div>
        <a href="{{ route('logout') }}"><button>
                Cerrar sesión
            </button></a>
    </div>
    <a href="{{ route('login') }}">
        <button class="volver">Volver</button>
    </a>
</body>

</html>