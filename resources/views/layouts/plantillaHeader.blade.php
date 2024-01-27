<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">

    @yield('styles')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Tiernocado')</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="..\estilos\style.css">
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
                <input type="text" placeholder="Buscar productos...🔎" id="buscador">
                <a href="" id="perfil">Mi perfil</a>
                <a href="" id="carrito">Carrito(0)</a>
            </section>
        </nav>
    </header>
@include('layouts._partials.menu')

    <!-- nav -->

    <!-- main -->

@yield('content')

    <!-- footer -->

</body>
</html>

