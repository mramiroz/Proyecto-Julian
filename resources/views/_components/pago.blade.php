<form id="payment-form" action="{{ route('pago.pagoRealizado') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="cardholder-name">Nombre del titular de la tarjeta</label>
        <input type="text" id="cardholder-name" class="form-control" name="cardholder-name">
    </div>
    <div class="form-group">
        <label for="card-number">Número de tarjeta</label>
        <input type="text" id="card-number" class="form-control" name="card-number" placeholder="1234 5678 9012 3456">
    </div>
    <div class="form-group">
        <label for="expiry-date">Fecha de vencimiento</label>
        <input type="text" id="expiry-date" class="form-control" name="expiry-date" placeholder="MM/AA">
    </div>
    <div class="form-group">
        <label for="cvc">CVC</label>
        <input type="text" id="cvc" class="form-control" name="cvc" placeholder="123">
    </div>
    <button type="submit" class="btn btn-primary">Pagar</button>
</form>

