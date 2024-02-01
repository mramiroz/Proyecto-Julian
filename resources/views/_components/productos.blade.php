<section id="productos-expuestos">
    <header id="productos-expuestos-cabecera">
        <h1>Algunos de nuestros productos:</h1>
    </header>
    @foreach($productos as $producto)
    <article class="productos-expuestos-tarjeta">
        <section>
            <figure class="figure-producto">
                <img src="{{$producto->imagen}}" alt="leche">
            </figure>
            <h2>{{$producto->nombre}}</h2>
            <h6 class="id">id:1</h6>
            <p class="precio">{{$producto->importe}}€/l</p>
            <button type="submit" value="Submit" name="incluir" class="incluir-carrito">Añadir al
                carrito</button>
        </section>
    </article>
    @endforeach
</section>
