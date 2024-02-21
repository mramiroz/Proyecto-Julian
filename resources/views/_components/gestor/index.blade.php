<div class="row">
    <div class="col-md-6">
        <div style="display: flex; align-items: center; justify-content: space-between;">
            <h1>Productos</h1>
            <form action="{{ route('gestor.create') }}" method="get">
                <button type="submit" class="btn btn-success">Agregar nuevo producto</button>
            </form>
        </div>
        @if(isset($productos) && count($productos) > 0)
                @foreach($productos as $producto)
                    <div>
                        <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}" style="width: 100px; height: 100px;">
                        {{ $producto->nombre }}
                        <a href="{{ route('gestor.edit', $producto->id) }}" class="btn btn-primary">Editar</a>
                        <form method="POST" action="{{ route('gestor.destroy', $producto->id) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="background-color: red;">Eliminar</button>
                        </form>
                    </div>
                @endforeach
        @endif
    </div>
</div>

