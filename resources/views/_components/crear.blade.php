<div class="container">
    <h2>Crear Producto</h2>

    <form action="/productos/create" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="categoria">Categoría:</label>
            <select name="categoria" id="categoria">
                @foreach($categorias as $categoria)
                    <option value="{{$categoria}}">{{$categoria}}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <input type="text" name="descripcion" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="imagen">Imagen:</label>
            <input type="text" name="imagen" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="importe">Importe:</label>
            <input type="number" name="importe" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Producto</button>
    </form>
</div>
