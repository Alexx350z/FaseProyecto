<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/estilos2.css">
</head>
<body>
   
<main>
       <div class="contenedor__rsalida">   
            <!--Register-->
            <h2>Regístrar Cuenta Empresarial: </h2>
            <form action="php/registro_empresa_be.php" method="POST" class="formulario__rsalida" enctype="multipart/form-data">
                        
                        <label for="Nombre">Nombre de la empresa: </label>
                        <input type="text" placeholder="Nombre de empresa" name="nombre_empresa"><br><br>
                        <label for="NIT">NIT Empresa: </label><br>
                        <input type="text" placeholder="NIT" name="nit"><br><br>
                        <label for="direccion">Direccion: </label><br>
                        <input type="text" placeholder="Direccion" name="direccion"><br><br>
                        <label for="Telefono">Telefono: </label><br>
                        <input type="text" placeholder="Telefono" name="telefono" ><br><br>
                        <label for="Correo">Correo: </label><br>
                        <input type="text" placeholder="Correo" name="correo" ><br><br>
                        <label for="usuario">Usuario: </label><br>
                        <input type="text" placeholder="Usuario" name="usuario" ><br><br>
                        <label for="contrasena">Contraseña: </label><br>
                        <input type="text" placeholder="Contraseña" name="contrasena" ><br><br>             
                        <button>Ingresar</button>     


            </form>
       </div>   
    </main> 

        <script src="assets/js/script.js"></script>
</body>
</html>