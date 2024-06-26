<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuponmania</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <a href="index.php">
            <h1>Cuponmania SV</h1>
        </a>
    </header>

    <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo" href="log.php">Iniciar Sesion/Registrarse</a>
        <a class="navegacion__enlace" href="nosotros.php">Nosotros</a>
    </nav>

    <main class="contenedor">
        <h1>Nuestros Productos</h1>

        
   <table href="producto.php">

   <thead>
   <tr>
     <th class="producto__nombre">Entrada: </th><br>
     <th class="producto__nombre">Precio: </th>
     <th class="producto__nombre">Fecha Inicio: </th>
     <th class="producto__nombre">Fecha Fin: </th>
     <th class="producto__nombre">Disponibles: </th>
     <th class="producto__nombre">Descripcion: </th>
     <th class="producto__nombre">Factura: </th>
    </tr>

   </thead>
   <?php
$conn = mysqli_connect("localhost", "root", "", "login_register_db");
$query = mysqli_query($conn, "SELECT * FROM r_entradas");
$result = mysqli_num_rows($query);
if ($result > 0) {
    while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td class="producto__nombre"><a href="producto.php"><?php echo $data['Entrada'] ?></a></td>
            <td class="producto__precio"><?php echo $data['Monto'] ?></td>
            <td class="producto__nombre"><?php echo $data['Fecha'] ?></td>
            <td class="producto__nombre"><?php echo $data['ffin'] ?></td>
            <td class="producto__nombre"><?php echo $data['ccupones'] ?></td>
            <td class="producto__nombre"><?php echo $data['descripción'] ?></td>
            <td><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($data['Imagen']) ?>"></td>
        </tr>
        <?php
    }
}
?>
    
   </table><br>

    </main>

    <footer class="footer">
        <p class="footer__texto">CuponMania SV - Todos los derechos Reservados 2024 &copy;</p>
    </footer>
    
</body>
</html>