let cartCount = 0;
const cartLink = document.getElementById('carrito');
const addToCartButtons = document.querySelectorAll('.incluir-carrito');

addToCartButtons.forEach(button => {
    button.addEventListener('click', () => {
        cartCount++;
        cartLink.textContent = `Carrito(${cartCount})`;
    });
});
