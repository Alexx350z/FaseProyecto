<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrontEnd Store</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <a href="index.php">
            <h1>CuponMania SV</h1>
        </a>
    </header>

    <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo" href="index.php">Tienda</a>
        <a class="navegacion__enlace" href="nosotros.php">Nosotros</a>
    </nav>

    <main class="contenedor">
        <h1>Pastaria</h1>

        <div class="camisa">
            <img class="camisa__imagen" src="img/7r.jpg" alt="Imagen del Producto">

            <div class="camisa__contenido">
                <p>Maecenas consectetur ultricies mi vel venenatis. Curabitur risus tellus, congue non tellus at, semper dapibus turpis. Duis pellentesque, risus sit amet placerat porttitor, tortor augue volutpat ante, non dignissim odio ligula at arcu.</p>

                <form action="php/pagop.php" method="POST" class="formulario">
                    <select class="formulario__campo" name="cantidad">
                        <option disabled selected>-- Seleccionar Cantidad Cupones --</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <input class="formulario__submit" type="submit" value="Agregar al Carrito">
                </form>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p class="footer__texto">CuponMania SVV - Todos los derechos Reservados 2024 &copy;</p>
    </footer>
    
</body>
</html>