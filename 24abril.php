<?php
$cnx=mysqli_connect('localhost:3307','root','AlbLopCer999?','reg_usu') or die('no hay nada nene xD');
//MOSTRAR DATOS
$datos='SELECT * FROM usuario';
$query=mysqli_query($cnx,$datos);
$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>LISTADO</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href=''>
</head>
<body>
    <!--mostrara los atributos de la BD-->
    <h1>LISTADO DE USUARIOS REGISTRADOS</h1>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Email</td>
        </tr>
        <?php do{ ?>
        <tr>
            <td><?php echo $row['id_usu']?></td>
            <td><?php echo $row['nom']?></td>
            <td><?php echo $row['email']?></td>
        </tr>
        <?php } while($row=mysqli_fetch_assoc($query));?>
    </table>

</body>
</html>