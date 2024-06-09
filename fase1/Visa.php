<?php
session_start();




// Obtener los cupones disponibles de la base de datos
$stmt = $conn->prepare('SELECT * FROM cupones WHERE stock > 0');
$stmt->execute();
$cupones = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Manejar el envío del formulario de compra
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cuponId = $_POST['cupon_id'];
    $cantidad = $_POST['cantidad'];
    $numeroTarjeta = $_POST['numero_tarjeta'];
    $fechaVencimiento = $_POST['fecha_vencimiento'];
    $cvv = $_POST['cvv'];

    // Validar la fecha de vencimiento de la tarjeta
    $fechaActual = new DateTime();
    $fechaVencimientoTarjeta = DateTime::createFromFormat('m/y', $fechaVencimiento);
    if ($fechaVencimientoTarjeta < $fechaActual) {
        $error = 'La tarjeta ha expirado.';
    } else {
        // Crear la factura
        $codigoFactura = generarCodigoUnico();
        $total = obtenerPrecioCupon($cuponId) * $cantidad;
        $stmt = $conn->prepare('INSERT INTO facturas (usuario_id, codigo, fecha, total) VALUES (?, ?, NOW(), ?)');
        $stmt->execute([$usuarioId, $codigoFactura, $total]);
        $facturaId = $conn->lastInsertId();

        // Registrar la compra
        $stmt = $conn->prepare('INSERT INTO compras (usuario_id, factura_id, cupon_id, cantidad) VALUES (?, ?, ?, ?)');
        $stmt->execute([$usuarioId, $facturaId, $cuponId, $cantidad]);

        // Actualizar el stock del cupón
        actualizarStockCupon($cuponId, $cantidad);

        // Redirigir a la página de éxito o mostrar la factura
        header('Location: factura.php?id=' . $facturaId);
        exit;
    }
}
?>

<!-- HTML para mostrar los cupones disponibles y el formulario de compra -->