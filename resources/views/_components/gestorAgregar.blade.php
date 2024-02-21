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
