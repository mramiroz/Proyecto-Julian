@foreach($productos as $producto)
<section class="producto">
    <figure class="figure-producto">
        <img src="{{$producto->imagen}}" alt="{{$producto->nombre}}">
    </figure>
    <div class="info-producto">
        <h2>{{$producto->nombre}}</h2>
        <h6 class="id">id: {{$producto->id}}</h6>
        <p class="precio">{{$producto->importe}} €</p>
        <form id="form-{{ $producto->id}}" action="{{ route('carrito.add') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $producto->id }}">
            <button type="submit" value="Submit" name="incluir" class="incluir-carrito">Añadir al carrito</button>
        </form>
    </div>
</section>
@endforeach
