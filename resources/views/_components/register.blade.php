<form id="register" action="/usuario/register" method="POST">
        @csrf
        <label for="email">Correo: </label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Contraseña: </label>
        <input type="password" name="password" id="password">
        <br>
        <label for="password-again">Confirme la contraseña: </label>
        <input type="password" name="password-again" id="password-again">
        <br>
        <input type="submit" id="submit" value="Registrarse">
</form>
