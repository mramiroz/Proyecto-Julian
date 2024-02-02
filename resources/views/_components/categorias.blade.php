<section id="categorias">
    <header id="categorias-cabecera">
        <h2>Categor&iacute;as</h2>
    </header>
    <nav id="categorias-nav">
        <ul id="categorias-lista">
            @php
            $categoriasIntroducidas = [];
            @endphp
            @foreach($productos as $producto)
            @if (!in_array($producto->categoria, $categoriasIntroducidas))
            <li id="categoria"><a href="{{route('productos.show', $producto->categoria)}}"
                    id="perfil">{{$producto->categoria}}</a></li>
            @php
            array_push($categoriasIntroducidas, $producto->categoria);
            @endphp
            @endif
            @endforeach
        </ul>
    </nav>
</section>