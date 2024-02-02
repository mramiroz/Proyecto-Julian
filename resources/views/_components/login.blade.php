<form id="login" action="/usuario/validarUsuario" method="POST">
        @csrf
        <label for="email">Correo: </label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Contraseña: </label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" id="submit" value="Ingresar">
</form>
