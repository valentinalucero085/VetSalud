<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VetSalud</title>
    <link rel="icon" type="image/png" href="{{ asset('imagenes/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>

<body>
    <header>
        <div class="logo">
            <img src="{{ asset('imagenes/logo.png') }}" alt="Logo VetSalud" class="logo-img">
        </div>
        <div class="enlaces-inicio">
            <a href="#">Inicio</a>
            <a href="#">Sobre Nosotros</a>
            <a href="/login">Login</a>
        </div>
    </header>
    <div class="container">
        <div class="container-inicio">
            <div class="bienvenida">
                <h1>¡Bienvenidos a VetSalud!</h1>
                <p>En VetSalud creemos que cada mascota es parte de la familia, por eso nos comprometemos a brindarles
                    el cuidado y la atención que merecen. Nuestro equipo de profesionales está aquí para acompañarte en
                    cada etapa de la vida de tu compañero, desde la prevención y el diagnóstico, hasta los tratamientos
                    más especializados. <br> Ofrecemos un ambiente cálido, confiable y con los recursos necesarios para
                    garantizar el bienestar y la salud de tus amigos de cuatro patas. <br> Porque su felicidad es
                    nuestra misión, y su salud, nuestra prioridad.</p>
            </div>
            <img src="{{ asset('imagenes/perro_marron.png') }}" alt="Imagen de perro pequinés" class="img-bienvenida">

        </div>
        <div class="container-categorias">
            <h1>¡Trabajamos con todas las especies!</h1>
            <div class="container-catimg">
                <div class="fondo-imagenes1">
                    <img src="{{ asset('imagenes/hamster.png') }}" alt="Imagen de hámster" class="img-categoria">
                </div>
                <div class="fondo-imagenes2">
                    <img src="{{ asset('imagenes/loro.png') }}" alt="Imagen de loro" class="img-categoria">
                </div>
                <div class="fondo-imagenes3">
                    <img src="{{ asset('imagenes/perro_blanco.png') }}" alt="Imagen de perro" class="img-categoria">
                </div>
                <div class="fondo-imagenes4">
                    <img src="{{ asset('imagenes/gato.png') }}" alt="Imagen de gato" class="img-categoria">
                </div>
            </div>

        </div>
        <div class="servicios">
            <h1>Servicios</h1>
            <div class="servicios-texto">
                <div class="vacunacion">
                    <h2>Vacunación</h2>
                    <p class="p-servicios">Plan de vacunas para cachorros, adultos y refuerzos anuales.</p>
                    <img src="{{ asset('imagenes/vacuna.png') }}" alt="Imagen de vacuna" class="servicios-img">

                </div>
                <div class="internacion">
                    <h2>Internación</h2>
                    <p class="p-servicios">Hospitalización para pacientes que necesitan cuidados intensivos.</p>
                    <img src="{{ asset('imagenes/cura.png') }}" alt="Imagen de internacion" class="servicios-img">

                </div>
                <div class="consultas">
                    <h2>Consultas Generales</h2>
                    <p class="p-servicios">Revisión del estado de salud de la mascota.</p>
                    <img src="{{ asset('imagenes/estetoscopio.png') }}" alt="Imagen de Consultas generales"
                        class="servicios-img">

                </div>
            </div>
        </div>
        <footer>

            <img src="{{  asset('imagenes/insta.png')  }}" alt="logo Instagram" class="icono">
            <p class="texto-footer">Instagram</p>
            <img src="{{  asset('imagenes/tel.png')  }}" alt="logo telefono" class="icono">
            <p class="texto-footer">299684888</p>
            <img src="{{  asset('imagenes/ubicacion.png')  }}" alt="logo ubicación" class="icono">
            <p class="texto-footer">Calle 123</p>
        </footer>
    </div>

</body>

</html>