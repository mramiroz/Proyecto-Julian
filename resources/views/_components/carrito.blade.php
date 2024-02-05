<article id="carrito">
    <h2 id="titulo">Carrito</h2>
    <section>
        @foreach($productos as $producto)
            <article class="productos-carrito-tarjeta">
                <section>
                    <figure class="figure-producto">
                        <img src="{{$producto->imagen}}" alt="leche">
                    </figure>
                    <h2 id="nombre-producto">{{$producto->nombre}}</h2>
                    <p class="precio">{{$producto->importe}}€/l</p>
                    <form action="" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $producto->id }}">
                        <input type="number" name="cantidad" id="cantidad">
                        <p id="unidad">kg</p>
                    </form>
                    <form action="/carrito/delete" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$producto->id}}">
                        <button class="eliminar-carrito">Eliminar</button>
                    </form>
                </section>
            </article>
        @endforeach
    </section>
    <article>
    <section>
        <h2 id="envio-titulo">Envío</h2>
        <p id="envio-precio">Gratis</p>
    </section>
    <section>
        <h2 id="total-titulo">Total</h2>
        <p id="total-precio">{{$total}}€</p>
    </section>
    <button class="checkout">Ir al pago →</button>
</article>
