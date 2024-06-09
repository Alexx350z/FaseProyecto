<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuponmania</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\estilo3.css">
</head>
<body>
<main>
<header class="header">
        <a href="index.php">
            <h1>Cuponmania SV</h1>
        </a>
    </header>

    <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo" href="log.php">Iniciar Sesion/Registrarse</a>
        <a class="navegacion__enlace" href="nosotros.php">Nosotros</a>
    </nav>
     

   <h1>Datos guardados: </h1>
   <table href="producto.php">

   <thead>
   <tr>
     <th>Entrada: </th>
     <th>Precio: </th>
     <th>Fecha Inicio: </th>
     <th>Fecha Fin: </th>
     <th>Fecha Limite: </th>
     <th>Disponibles: </th>
     <th>Descripcion: </th>
     <th>Factura: </th>
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
            <td><a href="producto.php"><?php echo $data['Entrada'] ?></a></td>
            <td><?php echo $data['Monto'] ?></td>
            <td><?php echo $data['Fecha'] ?></td>
            <td><?php echo $data['ffin'] ?></td>
            <td><?php echo $data['flimite'] ?></td>
            <td><?php echo $data['ccupones'] ?></td>
            <td><?php echo $data['descripción'] ?></td>
            <td><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($data['Imagen']) ?>"></td>
        </tr>
        <?php
    }
}
?>
    
   </table><br>
   <button><a href="db.php">Regresar</a> </button>


</main> 
    
</body>
</html>