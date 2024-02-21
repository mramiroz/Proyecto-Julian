<section id="productos-expuestos">
    <header id="productos-expuestos-cabecera">
        @if(isset($categoria))
            <h1>Algunos de nuestros productos de "{{$categoria->nombre}}"</h1>
        @else
            <h1>Algunos de nuestros productos</h1>
        @endif
    </header>
    <article class="productos-expuestos-tarjeta">
        @include('productos.cards')
    </article>
</section>
