<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php?error=1");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acceso Aprobado - Wang Editorial</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #000;
            color: #fff;
            text-align: center;
        }
        h1 {
            color: #33ff33;
            margin-top: 50px;
        }
        ol {
            text-align: left;
            max-width: 600px;
            margin: 40px auto;
            font-size: 1.2em;
            line-height: 1.8em;
        }
        .logo-footer {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 80px;
            opacity: 0.7;
        }
        .btn-container {
            margin: 40px 0;
        }
        .btn {
            display: inline-block;
            margin: 10px;
            padding: 12px 24px;
            background: #9d4ede;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            font-size: 1em;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #7a39b8;
        }
    </style>
</head>
<body>
    <h1>¡Acceso aprobado!</h1>
    <ol>
        <li>Identificación obligatoria</li>
        <li>Registro digital de ingreso</li>
        <li>Credencial temporal para visitantes</li>
        <li>Control biométrico para empleados</li>
        <li>Acceso restringido por áreas</li>
        <li>Prohibición de objetos no autorizados</li>
        <li>Pulseras/credenciales especiales en eventos</li>
        <li>Acompañamiento obligatorio de visitas</li>
        <li>Registro de salida obligatorio</li>
        <li>Sanciones por incumplimiento</li>
    </ol>

    <div class="btn-container">
        <a href="login.php" class="btn">INICIO</a>
        <a href="register.php" class="btn">REGISTRO</a>
    </div>

    <img src="img/logo.png" alt="Logo Wang Editorial" class="logo-footer">
</body>
</html>
