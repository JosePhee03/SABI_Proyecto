<?php
include('conexion.php');

$clave=$_POST['nclave'];
$usuario=$_POST['nnombre'];


  if(empty($usuario) || empty($clave)) 
  	{header("#");
	exit();}

$consulta=("SELECT * FROM usuarios where Mail= '". $usuario . "'");

	
if ($usuario == "#" && $clave == "#"){
	session_start();
	$_SESSION['usuario2']=$usuario;
	header("#");
} else{

	$resultado=$conexion->query($consulta);
if($row = mysqli_fetch_array($resultado)){ 
	if ($row['Clave'] == $clave) { 
	session_start(); 
	$_SESSION['usuario']=$usuario;
	header("#");
	# code...
	} else{
		echo'
			<script>
				alert("Contraseña o correo incorrectos")
				window.location = "#";
			</script>
			';
			exit();
			}
} else{
		echo'
			<script>
				alert("Contraseña o correo incorrectos")
				window.location = "#";
			</script>
			';
		exit();
	}




}




?>