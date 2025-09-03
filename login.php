<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Wang Editorial</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="login-screen">
    <div class="login-container">
        <div class="logo"></div>
        <h1>Wang Editorial</h1>
        <p>Control de Acceso Seguro</p>

        <?php if (isset($_GET['error'])): ?>
            <p style="color: #ff3333;">❌ Usuario o contraseña incorrectos</p>
        <?php elseif (isset($_GET['registro'])): ?>
            <p style="color: #33ff33;">✅ Registro exitoso, ya puede iniciar sesión</p>
        <?php endif; ?>

        <form action="login_process.php" method="POST">
            <input type="text" name="usuario" placeholder="Nombre de usuario" required>
            <input type="password" name="contraseña" placeholder="Contraseña" required>
            <button type="submit" class="btn-purple">Ingresar</button>
        </form>

        <div class="options">
            <a href="register.php">Registrar nuevo usuario</a> |
            <a href="#">¿Olvidó su contraseña?</a>
        </div>
    </div>
</body>
</html>
