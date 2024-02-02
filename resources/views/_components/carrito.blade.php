<article id="carrito">
  <h2 id="titulo">Carrito</h2>
  <section>
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
  </section>
  </article>
  </section>
  <article>
    <h2 id="resumen-titulo">Resumen de compra</h2>
    <section id="subtotal">
    <p id=""> Gastos de envio:</p>
    <p> 6.47</p>
    </section>
    
    <br>
    <p></p>
    <br>
    <p></p>
    <br>
    <p></p>
    </section>
</article>
  <div class="summary">
    <div class="shipping">Gastos de envio</div>
    <div class="total">3.99€</div>
  </div>
  <div class="summary">
    <div class="tax">IVA</div>
    <div class="total">2.20€</div>
  </div>
  <div class="summary">
    <div class="total">Total</div>
    <div class="total">12.66€</div>
  </div>
  <button class="checkout">Ir al pago →</button>
  </div>