<?php

session_start();
error_reporting(0);


?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">

<link rel="stylesheet" href="css/estilo.css">
<link rel="stylesheet" href="css/es.css">
    <title>Usuarios</title>
</head>

<div class="container is-fluid">




<div class="col-xs-12">
  		<h1>Bienvenido Administrador </h1>
      <br>
		<h1>Lista de usuarios</h1>
    <br>
		<div>
			<a class="btn btn-success" href="log.php">Nuevo usuario 
      <i class="fa fa-plus"></i> </a>
      <a class="btn btn-success" href="clientev.php">Pagina Principal
      <i class="fa fa-plus"></i> </a>
      <a class="btn btn-warning" href="../includes/_sesion/cerrarSesion.php">Log Out
      <i class="fa fa-power-off" aria-hidden="true"></i>
       </a>

		</div>
		<br>




           <br>


			</form>
        
        
 
      <table class="table table-striped table-dark " id= "table_id">

                   
                         <thead>    
                         <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Usuario</th>
                        <th>Contrasena</th>
                        <th>Telefono</th>
                        <th>Rol</th>
                        <th>Acciones</th>
         
                        </tr>
                        </thead>
                        <tbody>

				<?php

$conexion=mysqli_connect("localhost", "root", "", "login_register_db");               
$SQL = "SELECT nombre_completo, correo, usuario, contrasena, telefono, rol FROM usuarios";
$dato = mysqli_query($conexion, $SQL);
if (!$dato) {
    die("Error en la consulta: " . mysqli_error($conexion));
}


if($dato -> num_rows >0){
    while($fila=mysqli_fetch_array($dato)){
    
?>
<tr>
<td><?php echo $fila['nombre_completo']; ?></td>
<td><?php echo $fila['correo']; ?></td>
<td><?php echo $fila['usuario']; ?></td>
<td><?php echo $fila['contrasena']; ?></td>
<td><?php echo $fila['telefono']; ?></td>
<td><?php echo $fila['rol']; ?></td>



<td>


<a class="btn btn-warning" href="editar_user.php?usuario=<?php echo $fila['usuario']?> ">
<i class="fa fa-edit">Editar</i> </a>

  <a class="btn btn-danger" href="eliminar_user.php?correo=<?php echo $fila['correo']?>">
<i class="fa fa-trash">Eliminar</i></a>

</td>
</tr>


<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="16">No existen registros</td>
    </tr>

    
    <?php
    
}

?>


	</body>
  </table>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="../js/user.js"></script>


</html>