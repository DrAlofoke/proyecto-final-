<?php
$dsn = 'mysql:host=sql311.infinityfree.com;dbname=if0_35534213_XXX
(see below)';
$usuario = 'if0_35534213';
$contrasena = 'Zp1ORTtQXJ';

try {
    // Intentar establecer la conexión
    $conexion = new PDO($dsn, $usuario, $contrasena);

    // Configurar el modo de error y excepciones
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa";
} catch (PDOException $e) {
    // Capturar y mostrar cualquier error en la conexión
    echo "Error de conexión: " . $e->getMessage();


}



?>