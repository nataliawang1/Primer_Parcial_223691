<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wang_editorial";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("<h3 style='color: red;'>❌ Error de conexión: " . $e->getMessage() . "</h3>");
}
?>