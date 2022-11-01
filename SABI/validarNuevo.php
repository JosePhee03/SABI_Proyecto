<?php
include('conexion.php');


$email=$_POST['cemail'];
$clave=$_POST['cclave'];
$nombre=$_POST['cnombre'];
$apellido=$_POST['capellido'];
$conclave=$_POST['conclave'];



if(empty($email) || empty($clave) || empty($conclave)|| empty($nombre) || empty($apellido)) {
	echo '
		<script>
			alert("Alguno de los campos quedo vacio, complete antes de continuar");
			window.location = "#";
		</script>
	';
	exit();

}else{
	

$consulta = "INSERT INTO usuarios sabi(nombre,apellido,email,contraseña) VALUES('$nombre','$apellido','$email','$clave')";
}
//Verificar las claves de los usuarios
if ($conclave !== $clave) {
	echo '
		<script>
		alert("La confirmación de la contraseña es incorrecta verifique que sean iguales");
			window.location = "#";
		</script>
	';
	exit();
}

//Verificar los correos de los ususarios

$verificar_correos = mysqli_query($conexion, "SELECT * FROM usuarios sabi where email= '". $email . "'");



if (mysqli_num_rows($verificar_correos) > 0) {
	echo '
		<script>
			alert("Este correo ya está en uso, pruebe con otro diferente");
			window.location = "#";
		</script>
	';
	exit();
}


//Verificar las claves de los usuarios

$verificar_claves = mysqli_query($conexion, "SELECT * FROM usuarios sabi where contraseña= '". $clave . "'");

if (mysqli_num_rows($verificar_claves) > 0) {
	echo '
		<script>
			alert("Esta clave ya está en uso, pruebe con otra diferente");
			window.location = "#";
		</script>
	';
	exit();
}




$ejecutar = mysqli_query($conexion , $consulta);

if($ejecutar) {
	echo '
		<script>
			alert("Usuario registrado con éxito");
			window.location = "#";
		</script>
	';
	
}else{
	echo '
		<script>
			alert("No se ha registrado correctamente el usuario vuelva a intentar");
			window.location = "#";
		</script>
	';
}

 mysqli_close($conexion);



?>