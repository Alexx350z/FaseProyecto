<!DOCTYPE html>
<html>
<head>
    <title>Interfaz de Pago</title>
    <script src="https://js.stripe.com/v3/"></script>
    <style>
        #card-element {
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>

<link rel="stylesheet" href="assets/css/estilo3.css">
</head>
<body>

    
    <form action="charge.php" method="post" id="payment-form" class="payment-form">
        <div>
            <br><br><br><br><br><br><br><br><br><br>
        <h1>Proceso De Pago</h1>
            <br><br><br><br><br>
            <label for="card-element">Tarjeta de Crédito o Débito</label>
            <div id="card-element"></div>
        </div>
        <br><br>
        <button type="submit" id="submit-button">Pagar</button>
    </form>

    <script>
        var stripe = Stripe('pk_test_TU_CLAVE_PUBLICA_DE_STRIPE');
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#card-element');

        var form = document.getElementById('payment-form');
        var submitButton = document.getElementById('submit-button');

        form.addEventListener('submit', function(event) {
            event.preventDefault();
            submitButton.disabled = true;

            stripe.createToken(cardElement).then(function(result) {
                if (result.error) {
                    alert(result.error.message);
                    submitButton.disabled = false;
                } else {
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', result.token.id);
                    form.appendChild(hiddenInput);
                    form.submit();
                }
            });
        });
    </script>
</body>
</html>