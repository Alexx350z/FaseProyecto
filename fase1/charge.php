<?php


try {
    if()

    echo 'Pago exitoso! ID de la transacción: ' . $charge->id;
} catch () {
    echo 'Error: ' . $e->getMessage();
} catch (\Stripe\Exception\InvalidRequestException $e) {
    echo 'Error: ' . $e->getMessage();
}