<body>


    @yield('categorias')
    <section id="productos-expuestos">
        <header id="productos-expuestos-cabecera">
            <h1>Algunos de nuestros productos:</h1>
        </header>
        <article class="productos-expuestos-tarjeta">
            <section>
                <figure class="figure-producto">
                    <img src="{{ asset('img/Jengibre.png') }}" alt="jengibre">
                </figure>
                <h2>Jengibre</h2>
                <h6 class="id">id:1</h6>
                <p class="precio">5.80 €/kg</p>
                <button type="submit" value="Submit" name="incluir" class="incluirCarrito">Añadir al
                    carrito</button>
            </section>
        </article>
        <article class="productos-expuestos-tarjeta">
            <section>
                <figure class="productos-expuestos-tarjeta-figure">
                    <img src="{{ asset('img/tomate.png') }}" alt="tomate">
                </figure>
                <h2 class="productos-expuestos-tarjeta-nombre">Tomate</h2>
                <h6 class="productos-expuestos-tarjeta-id">id:1</h6>
                <p class="productos-expuestos-tarjeta-precio">2.69 €/kg</p>
                <button type="submit" value="Submit" name="incluir" class="productos-expuestos-tarjeta-ic">Añadir
                    al
                    carrito</button>
            </section>
        </article>
        <article class="productos-expuestos-tarjeta">
            <section>
                <figure class="figure-producto">
                    <img src="{{ asset('img/cebolla.png') }}" alt="cebolla">
                </figure>
                <h2>Cebolla</h2>
                <h6 class="id">id:1</h6>
                <p class="precio">1.75 €/kg</p>
                <button type="submit" value="Submit" name="incluir" class="incluirCarrito">Añadir al
                    carrito</button>
            </section>
        </article>
        <article class="productos-expuestos-tarjeta">
            <section>
                <figure class="figure-producto">
                    <img src="{{ asset('img/leche.png') }}" alt="leche">
                </figure>
                <h2>Leche Entera</h2>
                <h6 class="id">id:1</h6>
                <p class="precio">0.95 €/l</p>
                <button type="submit" value="Submit" name="incluir" class="incluirCarrito">Añadir al
                    carrito</button>
            </section>
        </article>
    </section>
</body>
