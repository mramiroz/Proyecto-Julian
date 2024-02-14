<form id="payment-form" action="/pago" method="POST">
    <div class="form-group">
        <label for="cardholder-name">Nombre del titular de la tarjeta</label>
        <input type="text" id="cardholder-name" class="form-control">
    </div>
    <div class="form-group">
        <label for="card-number">Número de tarjeta</label>
        <input type="text" id="card-number" class="form-control">
    </div>
    <div class="form-group">
        <label for="expiry-date">Fecha de vencimiento</label>
        <input type="text" id="expiry-date" class="form-control">
    </div>
    <div class="form-group">
        <label for="cvc">CVC</label>
        <input type="text" id="cvc" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Pagar</button>
</form>
