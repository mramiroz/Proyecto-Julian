<body>
    <form action="/usuario/validarUsuario" method="POST">
        @csrf
        <label for="">Correo: </label>
        <input type="email" name="email" id="email">
        <br>
        <label for="">Contraseña: </label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Ingresar">
    </form>
</body>

