<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/loginStyle.css">
    <title>Login</title>
</head>
<body>
   <div class="login-card">
    <h2>Login</h2>
    <h3>Enter your credentials</h3>

    <form action="validacion.php" method="post" class="login-form">
        <input type="email" name="email" placeholder="Correo">
        <input type="password" name="password" placeholder="Contraseña">
        <a href="#">Forget your password?</a>
        <a href="./Register.html">Register</a>
        <button type="submit">Login</button>
    </form>
    
   </div>
</body>
</html>