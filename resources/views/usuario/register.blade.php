<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/usuario/create" method="POST">
        @csrf
        <label for="">Nombre: </label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="">Apellidos: </label>
        <input type="text" name="apellidos" id="apellidos">
        <br>
        <label for="">Correo: </label>
        <input type="email" name="email" id="email">
        <br>
        <label for="">Contraseña: </label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
