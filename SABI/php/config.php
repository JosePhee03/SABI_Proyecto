<?php

//atributos
$servidor='localhost';
$usuarios='root';
$password='';
$db='sabi';

//métodos
$conexion=new mysqli($servidor,$usuarios,$password,$db);
if($conexion->connect_errno){echo "error al conectarse{$conexion->connect_errno}";}
