<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])
    @yield('styles')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Tiernocado')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Noto+Color+Emoji&family=Pacifico&family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
