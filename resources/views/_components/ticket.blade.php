<h1>Ticket Detalle</h1>
    <div>
        <h2>Ticket</h2>
        <p>Nombre:{{ $usuario->nombre}} {{$usuario->apellidos}}</p>
        <p>Direccion: {{ $usuario->direccion }}</p>
        <p>Descripcion: </p>
        <ul>
            @foreach($productos as $producto)
                @php
                    $contieneProducto = $contiene->firstWhere('id_producto', $producto->id);
                @endphp
                <li>
                    <p>{{$producto->nombre}}</p>
                    <p>Precio unitario: {{$producto->importe}}</p>
                    <p>Cantidad: {{ $contieneProducto->cantidad }}</p>
                    <p>Total: {{$producto->importe * $contieneProducto->cantidad}}</p>
                </li>
            @endforeach
        </ul>
        <p>Total: {{ $carrito->total}}</p>
    </div>
<a href="{{route('pago.devolverExito')}}">Finalizar</a>
