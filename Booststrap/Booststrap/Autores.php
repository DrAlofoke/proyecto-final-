<?php
include('conexion.php');

$consultaAutores = "SELECT DISTINCT nombre, apellido FROM autores";
$resultadoAutores = $conexion->query($consultaAutores);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Autores</title>
    <!-- Agrega aquí tus enlaces a CSS y JavaScript -->
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
    <h1 class="titulo">Listado de Autores</h1>
    <ul>
        <?php while ($autor = $resultadoAutores->fetch(PDO::FETCH_ASSOC)) : ?>
            <li><?= $autor['nombre']?></li>
        <?php endwhile; ?>
    </ul>
    <!-- Agrega aquí tu contenido HTML adicional -->
</body>
</html>
