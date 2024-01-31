<body>
    <h1>Perfil de usuario</h1>

  <label for="name">Nombre : <span id="username">nombre_usuario</span></label>
  <input type="text" id="newName" placeholder="Nuevo nombre">
  <button onclick="changeUsername()">Cambiar nombre</button>

  <label for="password">Contraseña : <span id="password">******</span></label>
  <input type="password" id="newPassword" placeholder="Nueva contraseña">
  <button onclick="changePassword()">Cambiar contraseña</button>

  <div class="address">
    <label for="address">Dirección : <span id="currentAddress">C/ Jaime I el Conquistador nº 12 2-1 Parla Madrid</span></label>
    <input type="text" id="newAddress" placeholder="Nueva dirección">
    <button onclick="changeAddress()">Cambiar dirección</button>
  </div>

</body>
