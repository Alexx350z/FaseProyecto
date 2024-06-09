<?php
   
require_once ("conexion_be.php");




if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
        case 'editar_registro':
            editar_registro();
            break; 

            case 'eliminar_registro';
            eliminar_registro();
    
            break;

            case 'acceso_user';
            acceso_user();
            break;


		}

	}

    function editar_registro() {
		$conexion=mysqli_connect("localhost","root","","login_register_db");
		extract($_POST);
		$consulta="UPDATE usuarios SET nombre_completo = '$nombre', correo = '$correo', telefono = '$telefono',
		contrasena ='$password', rol = '$rol' WHERE correo = '$correo' ";

		mysqli_query($conexion, $consulta);


		header('Location: ..\adminv.php');

}

function eliminar_registro() {
    $conexion=mysqli_connect("localhost","root","","login_register_db");
    extract($_POST);
    $correo= $_POST['correo'];
    $consulta= "DELETE FROM usuarios WHERE correo= '$correo' ";
    mysqli_query($conexion, $consulta);
    header('Location: ../adminv.php');

}

