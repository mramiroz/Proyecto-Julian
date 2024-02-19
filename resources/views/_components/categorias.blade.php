<section id="categorias">
    <header id="categorias-cabecera">
        <h2>Categor&iacute;as</h2>
    </header>
    <nav id="categorias-nav">
        <ul id="categorias-lista">
            @php
            $categoriasIntroducidas = [];
            @endphp
            @foreach($categorias as $categoria)
            @if (!in_array($categoria->categoria, $categoriasIntroducidas))
            @if(Request::url() === route('categoria.show', $categoria->categoria))
            <li id="categoria" class="categoria-seleccionada"><a
                    href="{{route('categoria.show', $categoria->categoria)}}" id="perfil">{{$categoria->categoria}}</a>
            </li>
            @else
            <li id="categoria"><a href="{{route('categoria.show', $categoria->categoria)}}"
                    id="perfil">{{$categoria->categoria}}</a></li>
            @endif
            @php
            array_push($categoriasIntroducidas, $categoria->categoria);
            @endphp
            @endif
            @endforeach
        </ul>
    </nav>
</section>