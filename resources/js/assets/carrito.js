
$(document).ready(function() {
    $('.input-cantidad').on('input', function(){
        var product_id = $(this).parent().siblings('input[name="product_id"]').val();
        var cantidad = $(this).val();
        console
        $.ajax({
            url: '/carrito/update',
            type: 'POST',
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                id_producto: product_id,
                cantidad: cantidad
            },
            success: function(response){
                $('#total-precio').text(response.newTotal + '€');
            }
        });
    });

    $('.incluir-carrito').each(function() {
        $(this).on('click', function(e) {
            e.preventDefault();
            var productId = $(this).siblings('input[name="product_id"]').val();
            $.ajax({
                url: '/carrito/add',
                method: 'POST',
                data: {
                    product_id: productId,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success:function(result){
                    location.reload();
                }
            });
        });
    });
    $('.eliminar-carrito').each(function(){
        $(this).on('click', function(e){
            e.preventDefault();

            var productId = $(this).siblings('input[name="product_id"]').val();
            $.ajax({
                url: '/carrito/delete',
                method: 'POST',
                data: {
                    product_id: productId,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success:function(result){
                    location.reload();
                }
            });
        });
    });

});
