<?php
$host = "localhost";
$usuario = "root";
$contraseña = "root";
$base_de_datos = "j_db";

$conexion = new mysqli($host, $usuario, $contraseña, $base_de_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
