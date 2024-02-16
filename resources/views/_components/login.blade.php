<h1>Iniciar sesi&oacute;n</h1>

<form id="login" action="/usuario/validarUsuario" method="POST">
        @csrf
        <label for="email">Correo: </label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Contraseña: </label>
        <input type="password" name="password" id="password">
        <br>
        <fieldset id="botones-form">
        <input type="submit" id="submit" value="Ingresar">
        <input type="button" id="submit" value="Registrarse" onclick="location.href='/register';">
        </fieldset>
</form>