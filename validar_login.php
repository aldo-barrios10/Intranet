<?php
session_start();
include "conexion.php";
$usuario = $_POST['nombre_usuario'];
$password = $_POST['password'];

$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $stmt = $conexion->prepare("CALL get_nombre(?, ?, @p_nombre, @p_apellido)");
    $stmt->bindParam(1, $usuario, PDO::PARAM_STR);
    $stmt->bindParam(2, $password, PDO::PARAM_STR);
    $stmt->execute();
    $stmt->closeCursor();
    
    $stmt = $conexion->query("SELECT @p_nombre AS nombre, @p_apellido AS apellido");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $nombre = $result['nombre'];
    $apellido = $result['apellido'];


     if ($nombre && $apellido) {
        $_SESSION['usermane'] = $usuario;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['apellido'] = $apellido;
        echo $nombre;
        header("location: ./dashboard.php");
    } else {
        header("location: ./login.php");
    }

} catch (PDOException $e) {
    echo "Error al ejecutar el procedimiento almacenado: " . $e->getMessage();
    header("location: ./login.php");
}


?>