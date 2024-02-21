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
