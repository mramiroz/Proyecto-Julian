<form id="register" action="/usuario/create" method="POST">
        @csrf
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="apellidos">Apellido: </label>
        <input type="text" name="apellidos" id="apellidos">
        <br>
        <label for="email">Correo: </label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Contraseña: </label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" id="submit" value="Registrarse">
</form>
