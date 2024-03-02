<article id="cart">
    <h2 id="titulo">Carrito</h2>
    <section>
        @foreach($productos as $producto)
        @php
        $contieneProducto = $contiene->firstWhere('id_producto', $producto->id);
        @endphp
        <article class="productos-carrito-tarjeta">
            <section class="producto-info">
                <figure class="figure-producto-cart">
                    <img src="{{$producto->imagen}}" alt="leche">
                </figure>
                <div>
                    <h2 id="nombre-producto">{{$producto->nombre}}</h2>
                    <p class="precio">{{$producto->importe}}€</p>
                    <form action="" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $producto->id }}">
                        <input type="hidden" name="total" value="{{ $total }}">
                        <div class="cantidad-input">
                            <label for="cantidad">Cantidad:</label>
                            <input type="number" name="cantidad" class="input-cantidad" min="0" value="{{$contieneProducto->cantidad}}">
                        </div>
                    </form>
                    <form action="/carrito/delete" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$producto->id}}">
                        <button class="eliminar-carrito">Eliminar</button>
                    </form>
                </div>
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
        <p id="total-precio">{{round($total, 2)}}€</p>
    </section>
    <a href="{{ route('pago.index') }}" class="checkout">Ir al pago →</a>
</article>
