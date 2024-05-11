<?php

include 'conexion_be.php';
$validar=$_POST['nombre_empresa'];
$nombre_completo= $_POST['nombre_empresa'];
$nit=$_POST['nit'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$correo= $_POST['correo'];
$usuario= $_POST['usuario'];
$contrasena =$_POST['contrasena'];



if( $validar == null || $validar = ''){

    header("Location: ../log.php");
    die();
    
  }

// Encriptamos contraseña

$query= "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena,nit,direccion,telefono,rol) 
         VALUES('$nombre_completo','$correo','$usuario','$contrasena','$nit','$direccion','$telefono','empresa')";
  
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