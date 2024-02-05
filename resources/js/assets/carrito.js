let cartCount = 0;
const cartLink = document.getElementById('carrito');
const addToCartButtons = document.querySelectorAll('.incluir-carrito');

addToCartButtons.forEach(button => {
    button.addEventListener('click', () => {
        cartCount++;
        cartLink.textContent = `Carrito(${cartCount})`;
    });
});

$(document).ready(function() {
    $('.incluir-carrito').on('click', function(e) {
        e.preventDefault();

        var formId = $(this).parent().attr('id');
        var productId = $(this).siblings('input[name="product_id"]').val();

        $.ajax({
            url: '/carrito/add',
            method: 'POST',
            data: {
                product_id: productId,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                // Aquí puedes manejar la respuesta del servidor
                console.log(response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Aquí puedes manejar los errores
                console.log(textStatus, errorThrown);
            }
        });
    });
});
