<?php

include 'conexion_be.php';

$correo2=$_POST['correo'];
$contrasena=$_POST['contrasena'];


$validar_login=mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo2'and contrasena='$contrasena'  and rol='cliente'");
$validar_login2=mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo2'and contrasena='$contrasena' and rol='admin'");
$validar_login3=mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo2'and contrasena='$contrasena' and rol='empresa'");
if(mysqli_num_rows($validar_login)> 0){
    header("location:../clientev.php");
    exit();
}
else{
   if(mysqli_num_rows($validar_login2)> 0){
    header("location:../adminv.php");
    exit();
   }
   else{
    header("location:../empresav.php");
    exit();
   }
   echo '
    <script>
     alert("Usuarios no registrado en la base de datos");
     window.location= "../index.php";
    </script>
    ';
    exit();
}



?>

