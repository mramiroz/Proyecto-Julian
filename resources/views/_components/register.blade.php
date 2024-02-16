<h1>Crear cuenta</h1>

<form id="register" action="/usuario/create" method="POST">
        @csrf
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="name">
        <br>
        <label for="apellidos">Apellido: </label>
        <input type="text" name="apellidos" id="surnames">
        <br>
        <label for="direccion">Dirección: </label>
        <input type="text" name="direccion" id="direccion">
        <br>
        <label for="email">Correo: </label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Contraseña: </label>
        <input type="password" name="password" id="password">
        <br>
        <fieldset id="botones-form">
        <input type="submit" id="submit" value="Registrarse">
        </fieldset>
</form>
