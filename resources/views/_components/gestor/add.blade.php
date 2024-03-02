<form method="POST" name="add" action="{{route('gestor.store')}}">
    @csrf
    <label for="name">Nombre del producto</label>
    <input type="text" name="nombre">
    <label for="description">Descripción del producto</label>
    <input type="text" name="descripcion">
    <label for="imagen">Imagen del producto</label>
    <input type="text" name="imagen">
    <select name="id_categoria">
        @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
        @endforeach

    </select>
    <label for="importe">Importe del producto</label>
    <input type="text" name="importe">
    <button type="submit">Agregar</button>
</form>
