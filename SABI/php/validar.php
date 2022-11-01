<?php
include('config.php');

$email = $_POST['_email'];
$pass = $_POST['_pass'];

if (empty($email) || empty($pass)) { //si los inputs de email y contraceña estan vacios
    header("location:../pages/sesion.html"); //Vueve a la  sesion
    exit();
}

if ($email === 'admin@admin' and $pass === 'admin') { //si se ingresa el usuario admin
    header("location:../pages/admin.html"); //se dirige a la pagina admin
    exit();
}

$consulta = ("SELECT * FROM usuarios where email='" . $email . "'"); //Selecciona todo una fila si el email coicide
$resultado = $conexion->query($consulta);
if ($row = mysqli_fetch_array($resultado)) { 
    if ($row['password'] == $pass) { //si en ademas de coicidir el email conicide la contraceña
        session_start();
        $_SESSION['usuario'] = $email;
        header("location:../pages/inicio.html");
    }else{
        include ('../pages/sesion.html');
        header("location:../pages/sesion.html");
        //-----------------Inserar un mesaje de error que diga que el email ya esta registrado
        echo'<script>alert("Contraceña Incorrecta");</script>';
		exit();
    }
}else{
    include ('../pages/sesion.html');
        header("location:../pages/sesion.html");
        //-----------------Inserar un mesaje de error que diga que el email ya esta registrado
        echo'<script>alert("Usuario no registrado");</script>';
		exit();
}

