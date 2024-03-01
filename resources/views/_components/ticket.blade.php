<h1>Ticket Detalle</h1>
    <div>
        <h2>Ticket</h2>
        <p>Nombre:{{ $usuario->nombre}} {{$usuario->apellidos}}</p>
        <p>Direccion: {{ $usuario->direccion }}</p>
        <p>Descripcion: </p>
        <ul>
            @foreach($productos as $producto)
                <li>
                    <p>{{$producto->nombre}}</p>
                    <p>{{$producto->precio}}</p>
                    <p>{{$producto->cantidad}}</p>
                    <p>{{$producto->total}}</p>
                </li>
            @endforeach
        </ul>
        <p>Total: {{ $carrito->total}}</p>
    </div>
    <a href="{{route('home')}}">Finalizar</a>

