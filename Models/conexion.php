<?php
$host = "localhost";
$dbname = "sistemaescolar";
$username = "root"; // Usuario de tu base de datos
$password = ""; // Contraseña de tu base de datos

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
