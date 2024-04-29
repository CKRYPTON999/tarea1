<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Usuarios</title>
    <!-- Importar Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <header class="text-center mb-5">
            <h2>Tabla de Usuarios</h2>
        </header>
        <div class="d-flex justify-content-end p-1 ">
            <a href="crear_usuario.php" class="btn btn-primary">Agregar Usuario</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'conexion.php';

                    $sql = "SELECT * FROM usuarios ORDER BY id DESC";
                    $resultado = $conexion->query($sql);

                    if ($resultado->num_rows > 0) {
                        while($fila = $resultado->fetch_assoc()) {
                            echo "<tr><td class='text-center'>".$fila["id"]."</td><td class='text-center'>".$fila["name"]."</td><td class='text-center'>".$fila["email"]."</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>No se encontraron usuarios.</td></tr>";
                    }

                    $conexion->close();
                    ?>
                </tbody>
            </table>
        </div>
        <!-- Agregar botón para agregar usuarios -->
    </div>
    <!-- Importar Bootstrap JS (opcional, solo si
