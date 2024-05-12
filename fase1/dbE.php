<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/estilo3.css">

</head>
<body>
   
  <main>
   <form> 
            <div class="Caja_menu">
            <tb> <h2>Menu principal</h2> <br>
            <div class="contenedor_dashboard"> 
            <p>Elige una de las siguientes opciones: </p><br>
            <button type="button" onclick="Reg()" id="btn_registrar_cupon">Publica Cupones de oferta. </button>
            <br>
            <button type="button" onclick="PaginaP()" id="btn_paginap">Pagina Principal.</button>
            <br>
            <button type="button" onclick="bala()" id="btn_ver_balance">Mostrar Reportes. </button>
            </div>
           </div> 
   </form>

  </main>
     <script src="assets/js/script.js"></script>
</body>
</html>