<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="login-card">
        <h2>Register</h2>
        <h3>Register to start section</h3>
    
            <form action="conn.php" method="post" class="login-form">
                <input type="text" name="Nombre"placeholder="Nombre de Usuario">
                <input type="email" name="email" placeholder="Correo">
                <input type="password" name="Contraseña" placeholder="Contraseña">
                <input type="password" name="Confirmar_Contraseña" placeholder="Confirmar Contraseña">
                <a href="./Login.html">Login</a>
                <button  type="submit" name="Register">Register</button>
            </form>
    </div>
</body>
</html>