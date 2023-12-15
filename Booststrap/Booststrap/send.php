

<?php

include("conexion.php");



$consultaLibros = "SELECT id_autor, titulo, nombre FROM autores, titulos";
$resultadoLibros = $conexion->query($consultaLibros);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Libros</title>
    <!-- Agrega aquí tus enlaces a CSS y JavaScript -->
    <link rel="stylesheet" href="">

    <style>
        .titulo{
            background: black;
            color: white;
        }

        .titulo{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 class="titulo">Listado de Libros Disponibles</h1>
    <ul>
        <?php while ($libro = $resultadoLibros->fetch(PDO::FETCH_ASSOC)) : ?>
            <li><?= $libro['titulo'] ?> - <?= $libro['nombre'] ?></li>
        <?php endwhile; ?>
    </ul>
    <!-- Agrega aquí tu contenido HTML adicional -->
</body>
</html>



