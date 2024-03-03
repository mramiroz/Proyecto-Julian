<body id="body-perfil">
    <h1>Perfil de usuario</h1>

  <label for="name">Nombre : <span id="username">{{$usuario->nombre}}</span></label>
  <input type="text" id="new-name" placeholder="Nuevo nombre">
  <button onclick="changeUsername()">Cambiar nombre</button>

  <label for="password">Contraseña : </label>
  <input type="password" id="new-password" placeholder="Nueva contraseña">
  <button onclick="changePassword()">Cambiar contraseña</button>

  <div class="address">
    <label for="address">Dirección : <span id="currentAddress">{{$usuario->direccion}}</span></label>
    <input type="text" id="new-address" placeholder="Nueva dirección">
    <button onclick="changeAddress()">Cambiar dirección</button>
  </div>

  <form action="/logout" method="POST">
    @csrf
    <input type="submit" class="logout" value="Cerrar Sesion">
  </form>
</body>
