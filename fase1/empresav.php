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
            <h2>Agregar Nueva Oferta: </h2>
            <form action="php/registro_salidas_be.php" method="POST" class="formulario__rsalida" enctype="multipart/form-data">
                        
                        <label for="titulo">Titulo de la oferta: </label>
                        <input type="text" placeholder="Tipo de la oferta" name="titulo"><br><br>
                        <label for="precio">Precio Regular:</label><br>
                        <input type="text" placeholder="Precio Regular" name="precio"><br><br>
                        <label for="precio">Precio Oferta:</label><br>
                        <input type="text" placeholder="Precio Oferta" name="precioO"><br><br>
                        <label for="fecha">Fecha Inicio:</label><br>
                        <input type="date" placeholder="Fecha Inicio" name="fechaI"><br><br>
                        <label for="fecha">Fecha Fin:</label><br>
                        <input type="date" placeholder="Fecha Fin" name="fechaF"><br><br>
                        <label for="fecha">Fecha Limite para canjear:</label><br>
                        <input type="date" placeholder="Fecha Limite" name="fechaL"><br><br>
                        <label for="cantidad_cupones">Cantidad de Cupones (opcional):</label><br>
                        <input type="number" id="cantidad_cupones" name="cantidad_cupones" min="1"><br><br>
                        <label for="descripcion">Descripción de la Oferta:</label><br>
                        <textarea id="descripcion" name="descripcion" rows="4" cols="50" required></textarea><br><br>
                        <label for="estado">Estado de la Oferta:</label><br>
                        <select id="estado" name="estado" required>
                        <option value="disponible">Disponible</option>
                        <option value="no_disponible">No Disponible</option>
                        </select><br><br>

        <input type="submit" value="Agregar Oferta">   

            </form>
       </div>   
    </main> 

        <script src="assets/js/script.js"></script>
</body>
</html>