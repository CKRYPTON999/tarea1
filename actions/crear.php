<?php
include '../conexion.php';

// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    // Validar los datos (opcional)
    // Puedes agregar aquí cualquier validación adicional que desees

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO usuarios (name, email, password) VALUES ('$name', '$email', '$password');";

    if ($conexion->query($sql) === TRUE) {

        header("Location: ../index.php");

    } else {
        echo "Error al crear el usuario: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
} else {
    // Si no se han enviado los datos del formulario, redirigir al formulario de creación de usuarios
    header("Location: crear_usuario.php");
    exit();
}
?>
