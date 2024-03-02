<h1>Ticket Detalle</h1>
    <div>
        <div class="ticket-user-info">
            <h2>Usuario</h2>
            <p>Nombre: {{ $usuario->nombre }} {{ $usuario->apellidos }}</p>
            <p>Direccion: {{ $usuario->direccion }}</p>
            <h3>Descripcion: </h3>
        </div>
        <ul>
            @foreach($productos as $producto)
                @php
                    $contieneProducto = $contiene->firstWhere('id_producto', $producto->id);
                @endphp
                <li class="ticket-producto">
                    <div class="ticket-producto-img">
                        <img src="{{$producto->imagen}}" alt="{{$producto->nombre}}">
                    </div>
                    <div class="ticket-producto-info">
                        <h3>{{$producto->nombre}}</h3>
                        <p>Precio unitario: {{$producto->importe}} €</p>
                        <p>Cantidad: {{ $contieneProducto->cantidad }}</p>
                        <p>Total: {{$producto->importe * $contieneProducto->cantidad}} €</p>
                    </div>
                </li>
            @endforeach
        </ul>
        <p id="ticket-total">Total: {{ $carrito->total}} €</p>
    </div>
<a href="{{route('pago.devolverExito')}}" class="user-button" id="ticket-button">Finalizar</a>
