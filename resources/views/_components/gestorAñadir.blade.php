<div class="row">
    <div class="col-md-12">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProductModal">
            Agregar producto
        </button>
    </div>
</div>

<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Agregar producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('gestor.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" id="name" class="form-control" name="name" placeholder="Nombre del producto">
                    <input type="text" id="description" class="form-control" name="description" placeholder="Descripción del producto">
                    <input type="file" id="imagen" class="form-control" name="imagen">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
        </div>
    </div>
</div>
