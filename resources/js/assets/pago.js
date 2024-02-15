document.getElementById('payment-form').addEventListener('submit', function(event) {
    var name = document.getElementById('cardholder-name').value;
    var cardNumber = document.getElementById('card-number').value;
    var expiryDate = document.getElementById('expiry-date').value;
    var cvc = document.getElementById('cvc').value;

    if (name.trim().length < 3) {
        alert('El nombre debe tener al menos 3 caracteres');
        event.preventDefault();
        return;
    }

    if (cardNumber.length != 16) {
        alert('El número de la tarjeta debe tener 16 dígitos');
        event.preventDefault();
        return;
    }

    if (!/^\d{2}\/\d{2}$/.test(expiryDate)) {
        alert('La fecha de vencimiento debe estar en el formato MM/AA');
        event.preventDefault();
        return;
    }

    if (cvc.length != 3) {
        alert('El CVC debe tener 3 dígitos');
        event.preventDefault();
        return;
    }
});
