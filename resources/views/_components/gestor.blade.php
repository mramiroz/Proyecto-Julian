<div class="row">
    <div class="col-md-6">
        <h1>Productos</h1>
        @if(isset($productos) && count($productos) > 0)
            <ul>
                @foreach($productos as $producto)
                    <li>
                        <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}" style="width: 100px; height: 100px;">
                        {{ $producto->nombre }}
                        <a href="{{ route('gestor.edit', $producto->id) }}" class="btn btn-primary">Editar</a>
                        <form method="POST" action="{{ route('gestor.destroy', $producto->id) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
    <div class="col-md-6">
        <h1>Agregar producto</h1>

        <form method="POST" action="{{ route('gestor.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nombre del producto</label>
                <input type="text" id="name" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="description">Descripción del producto</label>
                <input type="text" id="description" class="form-control" name="description">
            </div>
            <button type="submit" class="btn btn-primary">Agregar producto</button>
        </form>

        @if(isset($productos) && count($productos) > 0)
            @foreach($productos as $producto)
                <h1>Editar producto: {{ $producto->name }}</h1>

                <form method="POST" action="{{ route('gestor.update', $producto->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nombre del producto</label>
                        <input type="text" id="name" class="form-control" name="name" value="{{ $producto->name }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción del producto</label>
                        <input type="text" id="description" class="form-control" name="description" value="{{ $producto->description }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar producto</button>
                </form>
            @endforeach

            <h1>Eliminar producto</h1>

            <form method="POST" action="{{ route('gestor.destroy', $producto->id) }}">
                @csrf
                @method('DELETE')
                <select name="id" id="id">
                    @foreach($productos as $producto)
                        <option value="{{ $producto->id }}">{{ $producto->name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-danger">Eliminar producto</button>
            </form>
        @endif
