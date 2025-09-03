<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'db_connect.php';

$nombre_usuario = trim($_POST['nombre_usuario'] ?? '');
$email = trim($_POST['email'] ?? '');
$tipo = $_POST['tipo'] ?? '';
$puesto = trim($_POST['puesto'] ?? '');
$contraseña = $_POST['contraseña'] ?? '';

if (empty($nombre_usuario) || empty($contraseña) || empty($tipo)) {
    header("Location: register.php?error=1");
    exit();
}

try {
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE nombre_usuario = ?");
    $stmt->execute([$nombre_usuario]);

    if ($stmt->rowCount() > 0) {
        header("Location: register.php?error=2"); 
        exit();
    }

    $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO usuarios (nombre_usuario, contraseña, tipo, puesto, email) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nombre_usuario, $contraseña_hash, $tipo, $puesto, $email]);


    header("Location: login.php?registro=1");
    exit();

} catch (Exception $e) {
    error_log("Error en registro: " . $e->getMessage());
    header("Location: register.php?error=3");
    exit();
}
