<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ID = $_POST['ID'];
    $FECHA = $_POST['FECHA'];
    $CORREO = $_POST['CORREO'];
    $NOMBRE = $_POST['NOMBRE'];
    $ASUNTO = $_POST['ASUNTO'];
    $COMENTARIO = $_POST['comentario'];
    $Contraseña = $_POST['Contraseña'];

    $consultaInsertar = "INSERT INTO Contatos (ID,FECHA, CORREO, NOMBRE, ASUNTO, COMENTARIO, Contraseña) VALUES (?, ?, ?, ?.?,?,?)";
    $stmt = $conexion->prepare($consultaInsertar);
    $stmt->execute([$ID,$FECHA,$CORREO, $NOMBRE, $ASUNTO, $COMENTARIO, $Contraseña]);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <!-- Agrega aquí tus enlaces a CSS y JavaScript -->
    <link rel="stylesheet" href="./css/loginStyle.css">
</head>
<body>

    <div class="Contenedor">
        <h2>Formulario de Contacto</h2>

        <form class="form-contacto" action="validacion.php" method="post" action="">

            
            <input type="number" name="ID" placeholder="ID" required><br>
         
            <input type="DATE" name="FECHA" placeholder="FECHA" required><br>

            <input type="email" name="CORREO" placeholder="CORREO" required><br>

            <input type="text" name="NOMBRE" placeholder="NOMBRE" required><br>

            <input type="text" name="ASUNTO" placeholder="ASUNTO" required><br>

            <input type="password" name="Contraseña" placeholder="Contraseña" required><br>

            <textarea name="COMENTARIO" placeholder="Comentario" required></textarea><br>

            <button type="submit">Enviar</button>
        </form>
    </div>
    <!-- Agrega aquí tu contenido HTML adicional -->
</body>
</html>