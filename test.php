<?php
$cnx=mysqli_connect('localhost:3307','root','AlbLopCer999?','reg_usu') or die('no hay nada nene xD');
if(isset($_POST['send'])){
    //conexion al servidor de BD   
    $insertar='insert into usuario (nomb,email) values("'.$_POST['nomb'].'","'.$_POST['email'].'")';
    $registrar=mysqli_query($cnx,$insertar);
   echo '<script>
           alert("Registro Exitoso");
        </script>'; 
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='style.css'>
</head>
<body>
    <h1>REGISTRO DE USUARIOS</h1>
    <!--seccion -->
    <div class:"section">
   </p>Nombre:</p>
   <input type="text" placeholder="NOMBRE">
   <p>Email:</p>
   <input type="email" placeholder="EMAIL">
   <p>Contraseña:</p>
   <input type="password" placeholder="PASSWORD">
   <a href='24abril.php'><button type='submit'name='send' >Registrarse</button></a>
</div>
</body>
</html>