<?php
include('../php/config.php');

//atributos
$email = $_POST['_email']; //Contenido del input _email
$pass = $_POST['_pass']; //Contenido del input _pass

$consulta = ("SELECT * FROM usuarios where email='" . $email . "'"); //Consulta en la columna email (base de datos)
$resultado = $conexion->query($consulta); //resultado de la consulta


if ($row = mysqli_fetch_array($resultado)) { //consulta fila por fila 
    if ($row['email'] == $email) { //si en la consulta hay un email igual al contenido del input
        
        include ('../pages/registro.html');
        header("location:../pages/registro.html");
        //-----------------Inserar un mesaje de error que diga que el email ya esta registrado
        echo'<script>alert("Usuario ya existe");</script>';
		exit();

    }
} else { //Si no hay un email que coicide
    //métodos
    $consulta = "insert into usuarios(email,password) VALUES ('$email','$pass')"; //crea una fila nueva con los datos igresados
    $conexion->query($consulta);

    include ('../pages/inicio.html');
    header("location:../pages/inicio.html");
    //-----------------Inserar un mesaje de error que diga que el email ya esta registrado
    echo'<script>alert("Usuario creado con exito");</script>';
    exit();
}
