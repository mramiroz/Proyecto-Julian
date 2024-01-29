
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/assets/footer.css'])
        @vite(['resources/css/assets/header.css'])
        @vite(['resources/css/assets/cuerpo.css'])
        @yield('styles')
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('Tiernocado')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Pacifico&family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap"
            rel="stylesheet">
    </head>
    <body>
            @yield('header')

        <section id="categorias">
            <header id="categorias-cabecera">
                <h2>Categor&iacute;as</h2>
            </header>
            <nav id="categorias-nav">
                <ul id="lista-categorias">
                    <li id="categoria-alimentacion"><a href="" id="perfil">Alimentaci&oacute;n</a></li>
                    <li id="categoria-bebidas"><a href="" id="perfil">Bebidas</a></li>
                    <li id="categoria-limpieza"><a href="" id="perfil">Limpieza</a></li>
                    <li id="categoria-cuidado-personal"><a href="" id="perfil">Cuidado personal</a></li>
                </ul>
            </nav>
        </section>
        <section id="productos-expuestos">
            <header id="productos-expuestos-cabecera">
                <h1>Algunos de nuestros productos:</h1>
            </header>
            <article class="productos-expuestos-tarjeta">
                <section>
                    <figure class="figure-producto">
                        <img src="..\img\tomate.jpg" alt="tomate" srcset="">
                    </figure>
                    <h2>Tomate</h2>
                    <h6 class="id">id:1</h6>
                    <p class="precio">2.69 €/kg</p>
                    <button type="submit" value="Submit" name="incluir" class="incluirCarrito">Añadir al
                        carrito</button>
                </section>
            </article>
            <article class="productos-expuestos-tarjeta">
                <section>
                    <figure class="productos-expuestos-tarjeta-figure">
                        <img src="..\img\tomate.jpg" alt="tomate" srcset="">
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
                        <img src="..\img\tomate.jpg" alt="tomate" srcset="">
                    </figure>
                    <h2>Tomate</h2>
                    <h6 class="id">id:1</h6>
                    <p class="precio">2.69 €/kg</p>
                    <button type="submit" value="Submit" name="incluir" class="incluirCarrito">Añadir al
                        carrito</button>
                </section>
            </article>
            <article class="productos-expuestos-tarjeta">
                <section>
                    <figure class="figure-producto">
                        <img src="..\img\tomate.jpg" alt="tomate" srcset="">
                    </figure>
                    <h2>Tomate</h2>
                    <h6 class="id">id:1</h6>
                    <p class="precio">2.69 €/kg</p>
                    <button type="submit" value="Submit" name="incluir" class="incluirCarrito">Añadir al
                        carrito</button>
                </section>
            </article>
        </section>
            @yield('footer')
    </body>

    </html>
