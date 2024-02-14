<header>
    <nav id="nav-cabecera">
        <section id="logo">
            <a href="/" class="marca" id="marca-superior">Tiernocado</a>
        </section>
        <section id="utilidades">
            <a href="/carrito" id="carrito">Carrito (0)</a>
            <a href="/usuario/perfil" id="perfil">Mi perfil</a>
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
