<?php
session_start();
require_once 'db_connect.php';

$usuario = $_POST['usuario'] ?? '';
$contraseña = $_POST['contraseña'] ?? '';

if (empty($usuario) || empty($contraseña)) {
    header("Location: login.php?error=1");
    exit();
}

try {
    $stmt = $conn->prepare("SELECT id, nombre_usuario, contraseña, tipo FROM usuarios WHERE nombre_usuario = ? AND estado = 'activo'");
    $stmt->execute([$usuario]);
    $user = $stmt->fetch();

    if ($user && password_verify($contraseña, $user['contraseña'])) {
        $_SESSION['usuario_id'] = $user['id'];
        $_SESSION['nombre_usuario'] = $user['nombre_usuario'];
        $_SESSION['tipo'] = $user['tipo'];
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: login.php?error=1");
        exit();
    }
} catch (Exception $e) {
    header("Location: login.php?error=1");
    exit();
}
?>