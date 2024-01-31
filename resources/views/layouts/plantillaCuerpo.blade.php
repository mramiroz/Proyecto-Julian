<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/assets/footer.css'])
    @vite(['resources/css/assets/header.css'])
    @vite(['resources/css/assets/cuerpo.css'])
    @vite(['resources/css/assets/pagoRealizado.css'])
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
    @yield('header')
    <main>
        @yield('content')
    </main>
    <footer>
        <p class="marca" id="footer">Tiernocado</p>
    </footer>
</body>
