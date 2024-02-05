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
});
