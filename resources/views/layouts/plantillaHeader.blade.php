<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">

    @yield('styles')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- favicon -->
    <!-- estilos -->
</head>
<body>

    <!-- header -->
@include('layouts._partials.menu')

    <!-- nav -->

    <!-- main -->

@yield('content')

    <!-- footer -->

</body>
</html>

