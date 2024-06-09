<?php

include 'conexion_be.php';

$correo2=$_POST['cantidad'];

$validar=$_POST['cantidad'];
if( $validar == null || $validar = ''){
    
    echo '
  <script>
  alert("Seleccione la cantidad por favor. ");
  window.location = "../producto.php";
  </script>
  ';
  die();
    
}
else{
    echo '
    <script>
    alert("Procesando Pago...");
    window.location = "../payment.php";
    </script>
    ';
    die();
}



?>