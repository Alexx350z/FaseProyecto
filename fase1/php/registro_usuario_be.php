<?php

include 'conexion_be.php';

$nombre_completo= $_POST['nombre_completo'];
$correo= $_POST['correo'];
$usuario= $_POST['usuario'];
$contrasena =$_POST['contrasena'];
$apellidos =$_POST['apellidos'];
$dui= $_POST['dui'];
$fecha=$_POST['fecha'];
$validar=$_POST['nombre_completo'];


if( $validar == null || $validar = ''){
  echo '
  <script>
  alert("Sin datos para registrar. ");
  window.location = "../index.php";
  </script>
  ';
  die();
  
}


// Encriptamos contraseña

$query= "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena,apellidos,dui,fecha,rol) 
         VALUES('$nombre_completo','$correo','$usuario','$contrasena','$apellidos','$dui','$fecha','cliente')";
  
    // verificar que correo no se repita correo 
    $verificar_correo= mysqli_query($conexion, "SELECT * FROM usuarios where correo= '$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
        alert("Este correo ya esta registrado.");
        window.location = "../index.php";
        </script>
        ';
        exit();
        
    }

 // verificar que correo no se repita usuario
 $verificar_usuario= mysqli_query($conexion, "SELECT * FROM usuarios where usuario= '$usuario' ");

 if(mysqli_num_rows($verificar_usuario) > 0){
     echo '
     <script>
     alert("Este usuario ya esta registrado.");
     window.location = "../index.php";
     </script>
     ';
     exit();
     
 }

  $ejecutar= mysqli_query($conexion, $query);

  if($ejecutar){
    echo '
    <script>
    alert("Usuario almacenado exitosamente");
    window.location = "../index.php";
    </script>
    ';
  }
  else{
    echo '
    <script>
    alert("Intentalo de nuevo, usario no almacenado.");
    window.location = "../index.php";
    </script>
    ';}
    mysqli_close($conexion);
?> 