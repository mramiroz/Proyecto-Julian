<section id="categorias">
    <nav id="categorias-nav">
        <ul id="categorias-lista">
            @foreach($categorias as $categoria)
            <a href="{{route('categoria.show', $categoria->route)}}"
                id="categoria"><li>{{$categoria->nombre}}</li></a>
            @endforeach
        </ul>
    </nav>
</section>
