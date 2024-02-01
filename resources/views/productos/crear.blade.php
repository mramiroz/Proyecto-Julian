
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear Producto</h2>

        <form action="/productos/crear" method="post">

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" required>
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
@endsection
