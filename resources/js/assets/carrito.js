
$(document).ready(function() {
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
    })
});
