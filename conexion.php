<?php
$host = "localhost:3308";
$db = "email_service";
$user = "root";
$password = "1234";

try {
    $dsn = "mysql:host=$host;dbname=$db";
    $conexion = new PDO($dsn, $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    die();
}