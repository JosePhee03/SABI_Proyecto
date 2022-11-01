<?php

$servidor='localhost';
$usuario='root';
$password='';
$bd='sabi';

$conexion= new mysqli($servidor,$usuario,$password,$bd);

if ($conexion->connect_errno) {echo "error al conectarse{$conexion->connect_erno}";
}


?>