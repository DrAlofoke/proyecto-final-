<?php
// Validación de la solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Conexión a la base de datos
    include('conexion.php');

    // Variables para almacenar errores
    $errores = [];

    // Validación del ID
    if (empty($_POST['ID'])) {
        $errores[] = 'El campo ID es obligatorio.';
    } else {
        $id = $_POST['ID'];
        // Realiza validaciones adicionales si es necesario
    }

    // Validación de la fecha
    if (empty($_POST['FECHA'])) {
        $errores[] = 'El campo FECHA es obligatorio.';
    } else {
        $fecha = $_POST['FECHA'];
        // Realiza validaciones adicionales si es necesario
    }

    // Validación del correo electrónico
    if (empty($_POST['CORREO'])) {
        $errores[] = 'El campo CORREO es obligatorio.';
    } elseif (!filter_var($_POST['CORREO'], FILTER_VALIDATE_EMAIL)) {
        $errores[] = 'El formato del correo electrónico es incorrecto.';
    } else {
        $correo = $_POST['CORREO'];
    }

    // Validación del nombre
    if (empty($_POST['NOMBRE'])) {
        $errores[] = 'El campo NOMBRE es obligatorio.';
    } else {
        $nombre = $_POST['NOMBRE'];
        // Realiza validaciones adicionales si es necesario
    }

    // Validación del asunto
    if (empty($_POST['ASUNTO'])) {
        $errores[] = 'El campo ASUNTO es obligatorio.';
    } else {
        $asunto = $_POST['ASUNTO'];
        // Realiza validaciones adicionales si es necesario
    }

    // Validación de la contraseña
    if (empty($_POST['Contraseña'])) {
        $errores[] = 'El campo Contraseña es obligatorio.';
    } else {
        $contrasena = $_POST['Contraseña'];
        // Realiza validaciones adicionales si es necesario
    }

    // Validación del comentario
    if (empty($_POST['COMENTARIO'])) {
        $errores[] = 'El campo COMENTARIO es obligatorio.';
    } else {
        $comentario = $_POST['COMENTARIO'];
        // Realiza validaciones adicionales si es necesario
    }

    // Verificar si hay errores
    if (empty($errores)) {
        // No hay errores, procede a insertar los datos en la base de datos

        // Hash de la contraseña antes de almacenarla en la base de datos
        $hash_contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

        // Consulta SQL para insertar datos en la base de datos
        $consulta = "INSERT INTO contatos (id, fecha, correo, nombre, asunto, contraseña, comentario) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conexion->prepare($consulta);

        // Enlaza parámetros
        $stmt->bindParam(1, $id);
        $stmt->bindParam(2, $fecha);
        $stmt->bindParam(3, $correo);
        $stmt->bindParam(4, $nombre);
        $stmt->bindParam(5, $asunto);
        $stmt->bindParam(6, $hash_contrasena);
        $stmt->bindParam(7, $comentario);

        // Ejecuta la consulta
        if ($stmt->execute()) {
            echo "Datos insertados correctamente.";
        
        } else {
            echo "Error al insertar datos.";
        }
    } else {
        // Hay errores, muestra los mensajes de error
        foreach ($errores as $error) {
            echo $error . "<br>";
        }
    }
}
?>