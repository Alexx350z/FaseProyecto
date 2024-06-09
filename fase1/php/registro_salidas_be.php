<?php
// Verificar si se envió una imagen

    // Conexión a la base de datos

    $conn = mysqli_connect("localhost", "root", "", "login_register_db");
     
     $entrada=$_POST['titulo'];
     $monto=$_POST['precio'];
     $precio=$_POST['precioO'];
     $fecha=$_POST['fechaI'];
     $fechaF=$_POST['fechaF'];
     $fechaL=$_POST['fechaL'];
     $cantidad=$_POST['cantidad_cupones'];
     $descripcion=$_POST['descripcion'];
     $estado=$_POST['estado'];

     // Ruta temporal del archivo subido
     $ruta_temporal = $_FILES['archivo']['tmp_name'];

     // Leer el nombre original de la imagen
     $nombre_imagen = $_FILES['archivo']['name'];
 
     // Leer la imagen en memoria
     $imagen_binaria = file_get_contents($ruta_temporal);

     // Escapar los caracteres especiales para evitar problemas de SQL injection
    $imagen_binaria = mysqli_real_escape_string($conn, $imagen_binaria);
    $nombre_imagen = mysqli_real_escape_string($conn, $nombre_imagen);

    // Insertar la imagen en la base de datos
    $sql = "INSERT INTO r_entradas (Entrada, Monto, Fecha, Imagen, flimite, ffin, ccupones, descripción, estado) 
    VALUES ('$entrada','$monto','$fecha','$imagen_binaria','$fechaL','$fechaF','$cantidad','$descripcion','$estado')";
    $resultado = mysqli_query($conn, $sql);

    if($resultado){
        echo '
    <script>
     alert("Registro salida ingresado a la base de datos con exito");
     window.location= "../empresav.php";
    </script>
    ';
    mysqli_close($conn);
    } else {
        echo "Error al guardar la imagen en la base de datos";
    }


?>