<?php
include('config.php');

$email = $_POST['_email'];
$pass = $_POST['_pass'];

if (empty($email) || empty($pass)) { //si los inputs de email y contraceña estan vacios
    header("location:../pages/sesion.php"); //Vueve a la  sesion
    exit();
}

if ($email === 'admin@admin' and $pass === 'admin') { //si se ingresa el usuario admin
    header("location:../pages/admin.php"); //se dirige a la pagina admin
    exit();
}

$consulta = ("SELECT * FROM usuarios where email='" . $email . "'"); //Selecciona todo una fila si el email coicide
$resultado = $conexion->query($consulta);
if ($row = mysqli_fetch_array($resultado)) { 
    if ($row['password'] == $pass) { //si en ademas de coicidir el email conicide la contraceña
        session_start();
        $_SESSION['usuario'] = $email;
        header("location:../pages/inicio.php");
    }else{
        //-----------------Inserar un mesaje de error que diga que el email ya esta registrado
        echo 
        '<script>
            alert("Contraseña incorrecta");
            window.location = "../pages/sesion.php";
		</script>';
        exit();
    }
}else{
        //-----------------Inserar un mesaje de error que diga que el email ya esta registrado
        echo 
        '<script>
            alert("Usuario no registrado");
            window.location = "../pages/sesion.php";
		</script>';
        exit();
}

