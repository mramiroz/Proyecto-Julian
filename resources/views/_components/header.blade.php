<header>
    <nav id="nav-cabecera">
        <section id="logo">
            <a href="/" class="marca" id="marca-superior">Tiernocado</a>
        </section>
        <section id="utilidades">
            @if(Auth::check())
            <a href="/carrito" id="carrito" class="user_button">Carrito (0)</a>
            <a href="/usuario/perfil" id="perfil">Mi perfil</a>
            @if(Auth::user()->tipo == 'admin')
            <a href="/gestor" class="user_button">Admin</a>
            @endif
            @else
            <a href="/login" class="user_button">Iniciar sesión</a>
            <a href="/register" class="user_button">Registrarse</a>
            @endif
            <form id="busqueda-form" action="/search" method="get">
                <div id="barra-buscador">
                    <label for="buscador">
                        <span class="emoji" role="button" aria-label="Buscar" tabindex="0" id="lupa">🔎</span>
                    </label>
                    <input type="text" id="buscador" name="query" placeholder="Buscar productos..." autocomplete="">
                </div>
                <div id="suggestions"></div>
            </form>
        </section>
    </nav>
</header>
