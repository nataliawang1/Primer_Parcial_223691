<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - Wang Editorial</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="register-screen">
    <div class="register-container">
        <div class="logo"></div>
        <h1>Wang Editorial</h1>
        <p>Registro de Acceso</p>

        <?php if (isset($_GET['error'])): ?>
            <?php if ($_GET['error'] == 1): ?>
                <p style="color: #ff3333;">❌ Complete todos los campos obligatorios</p>
            <?php elseif ($_GET['error'] == 2): ?>
                <p style="color: #ff3333;">❌ El usuario ya existe</p>
            <?php else: ?>
                <p style="color: #ff3333;">❌ Error al registrar. Intente nuevamente.</p>
            <?php endif; ?>
        <?php endif; ?>

        <form action="register_process.php" method="POST">
            <input type="text" name="nombre_usuario" placeholder="Nombre de usuario" required>
            <input type="email" name="email" placeholder="Correo electrónico">
            <select name="tipo" required>
                <option value="">Tipo de usuario</option>
                <option value="empleado">Empleado</option>
                <option value="visitante">Visitante</option>
            </select>
            <input type="text" name="puesto" placeholder="Puesto / Rol">
            <input type="password" name="contraseña" placeholder="Contraseña" required>
            <button type="submit" class="btn-purple">Registrar</button>
        </form>

        <a href="login.php" class="btn-back">← Volver al inicio</a>
    </div>
</body>
</html>
