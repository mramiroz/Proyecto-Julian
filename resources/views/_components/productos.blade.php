<section id="productos-expuestos">
    <header id="productos-expuestos-cabecera">
        <h1>Algunos de nuestros productos categoria "{{$categoria->nombre}}"</h1>
    </header>
    <article class="productos-expuestos-tarjeta">
        @include('productos.cards')
    </article>
</section>
