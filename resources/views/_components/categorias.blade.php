<section id="categorias">
    <header id="categorias-cabecera">
        <h2>Categor&iacute;as</h2>
    </header>
    <nav id="categorias-nav">
        <ul id="categorias-lista">
            @foreach($categorias as $categoria)
            <li id="categoria"><a href="{{route('categoria.show', $categoria->route)}}"
                    id="perfil">{{$categoria->nombre}}</a></li>
            @endforeach
        </ul>
    </nav>
</section>
