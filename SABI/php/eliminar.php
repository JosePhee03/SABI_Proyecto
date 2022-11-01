<?php
include('config.php');

$id = $_GET['id'];

$consulta = ("DELETE FROM usuarios WHERE idusuario='$id'");
$conexion->query($consulta);

echo "Usuario $id ha sido eliminado";
echo "<br>";
echo "<a href='../pages/admin.php'>Volver</a>";
