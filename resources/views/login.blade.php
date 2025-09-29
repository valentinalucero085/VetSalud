<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VetSalud-Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    @if ($errors->any())
        <div class="alerta">
            {{ $errors->first()  }}
        </div>
    @endif


    <div class="formulario">
        <div class="imagen">
            <img src="{{ asset('imagenes/veterinario.png') }}" alt="">
        </div>
        <form method="POST" action="/login">
            @csrf
            <input type="email" name="email" placeholder="Ingrese su email" required>
            <input type="password" name="password" placeholder="Ingrese su contraseña" required>
            <button type="submit">Ingresar</button>
        </form>
    </div>
    <a href="{{ route('welcome') }}">
        <button class="volver">Volver</button>
    </a>
</body>

</html>