<?php
include('config.php');

$id = $_POST['_id'];
$email = $_POST['_email'];
$pass = $_POST['_password'];

$consulta = ("UPDATE usuarios SET email = '$email', password = '$pass' WHERE idusuario='$id'");
$conexion->query($consulta);

echo "Usuario $id se ha modificado con exito";
echo "<br>";
echo "<a href='../pages/admin.php'>Volver</a>";
