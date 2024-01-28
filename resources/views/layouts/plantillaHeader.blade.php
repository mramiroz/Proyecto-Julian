<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/assets/header.css'])
    @vite(['resources/js/assets/header.js'])
    @yield('styles')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Tiernocado')</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Pacifico&family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
</head>

<body>

    <header>
        <nav>
            <section id="logo">
                <a href="" class="marca" id="marca-superior">Tiernocado</a>
            </section>
            <section id="utilidades">
                <form id="busquedaForm" action="tu-accion-de-busqueda" method="get">
                    <label for="buscador">
                        <span class="emoji" role="button" aria-label="Buscar" tabindex="0" id="lupa">🔎</span>
                    </label>
                    <input type="text" id="buscador" name="q" placeholder="Buscar productos...">
                </form>
                <a href="" id="perfil">Mi perfil</a>
                <a href="" id="carrito">Carrito(0)</a>
            </section>
        </nav>
    </header>
    @yield('content')
</body>

</html>
