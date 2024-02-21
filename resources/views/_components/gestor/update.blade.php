<form method="POST" name="update" action="{{route('gestor.update', $producto->id)}}" >
    @csrf
    @method('PUT')
    <label for="name">Nombre del producto</label>
    <input type="text" name="nombre" value="{{ $producto->nombre }}">
    <label for="description">Descripción del producto</label>
    <input type="text" name="descripcion" value="{{ $producto->descripcion }}">
    <label for="imagen">Imagen del producto</label>
    <input type="text" name="img" value="{{ $producto->imagen }}">
    <select name="id_categoria">
        @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}" @if($categoria->id == $producto->categoria_id) selected @endif>{{ $categoria->nombre }}</option>
        @endforeach
    </select>
    <label for="importe">Importe del producto</label>
    <input type="text" name="importe" value="{{ $producto->importe }}">
    <button type="submit">Actualizar</button>
</form>

