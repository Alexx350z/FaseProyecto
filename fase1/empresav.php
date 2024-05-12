<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nueva Oferta</title>
</head>
<body>
    <h1>Agregar Nueva Oferta</h1>
    <form action="procesar_oferta.php" method="post">
        <label for="titulo">Título de la Oferta:</label><br>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="precio_regular">Precio Regular:</label><br>
        <input type="number" id="precio_regular" name="precio_regular" step="0.01" required><br><br>

        <label for="precio_oferta">Precio de Oferta:</label><br>
        <input type="number" id="precio_oferta" name="precio_oferta" step="0.01" required><br><br>

        <label for="fecha_inicio">Fecha de Inicio:</label><br>
        <input type="date" id="fecha_inicio" name="fecha_inicio" required><br><br>

        <label for="fecha_fin">Fecha de Fin:</label><br>
        <input type="date" id="fecha_fin" name="fecha_fin" required><br><br>

        <label for="fecha_limite">Fecha Límite para Canjear Cupón:</label><br>
        <input type="date" id="fecha_limite" name="fecha_limite" required><br><br>

        <label for="cantidad_cupones">Cantidad de Cupones (opcional):</label><br>
        <input type="number" id="cantidad_cupones" name="cantidad_cupones" min="1"><br><br>

        <label for="descripcion">Descripción de la Oferta:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" cols="50" required></textarea><br><br>

        <label for="estado">Estado de la Oferta:</label><br>
        <select id="estado" name="estado" required>
            <option value="disponible">Disponible</option>
            <option value="no_disponible">No Disponible</option>
        </select><br><br>

        <input type="submit" value="Agregar Oferta">
    </form>
</body>
</html>