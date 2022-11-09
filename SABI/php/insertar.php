<?php
include('../php/config.php');

//atributos
$email = $_POST['_email']; //Contenido del input _email
$pass = $_POST['_pass']; //Contenido del input _pass
$pass2 = $_POST['_pass2']; //Contenido del input _pass2

$consulta = ("SELECT * FROM usuarios where email='" . $email . "'"); //Consulta en la columna email (base de datos)
$resultado = $conexion->query($consulta); //resultado de la consulta

if ($pass != $pass2){
    //-----------------Inserar un mesaje de error que diga que el email ya esta registrado
    echo 
    '<script>
        alert("Las contraseñas no coiciden");
        window.location = "../pages/registro.php";
    </script>';
    exit();

}else{
    if ($row = mysqli_fetch_array($resultado)) { //consulta fila por fila 
        if ($row['email'] == $email) { //si en la consulta hay un email igual al contenido del input

            //-----------------Inserar un mesaje de error que diga que el email ya esta registrado
            echo 
            '<script>
                alert("El usuario ya existe");
                window.location = "../pages/registro.php";
            </script>';
            exit();
    
        }
    } else { //Si no hay un email que coicide
        //métodos
        $consulta = "insert into usuarios(email,password) VALUES ('$email','$pass')"; //crea una fila nueva con los datos igresados
        $conexion->query($consulta);
    
        //-----------------Inserar un mesaje de error que diga que el email ya esta registrado
         echo 
        '<script>
            alert("Contraseña Usuario creado con exito");
            window.location = "../pages/sesion.php";
		</script>';
        exit();
    }
}


