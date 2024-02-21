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

</form>
