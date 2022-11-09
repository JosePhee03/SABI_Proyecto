<?php
include('../php/config.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Icono--><link rel="shortcut icon" href="../img/logo_sabi.png" type="image/x-icon">

    <!---Fuentes-->
        <!--K2D Font--><link href="https://fonts.googleapis.com/css2?family=K2D:wght@200;400;600;800&display=swap" rel="stylesheet">
        <!--Blinker Font--><link href="https://fonts.googleapis.com/css2?family=Blinker:wght@300&display=swap" rel="stylesheet">
        <!--Nunito Font--><link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">
        <!---Fin Fuentes-->

    <!---Estilos CSS-->
    <link rel="stylesheet" href="../css/estilos.css">

    <!---Fin Estilos CSS-->

    <title>Admin</title>

</head>
<body>

    <!--Nav-->
    <?php include ('nav.php');?>
    <!--Fin Nav-->

    <!---Fondo Gris-->
    <div class="fondo">
        <div class="admin_cont">
            
            <div class="tabla_usuarios carta">
                <h2 class="titulo_alt">Tabla Usuarios</h2>
                <table class="tabla parrafo">
                    <tr class="fila_1">
                        <th>ID</th>
                        <th>Email</th>
                        <th>Contraseña</th>
                        <th></th>
                    </tr>
                    <?php
                    $consulta = "SELECT * FROM usuarios";
        
                    if ($resultado = $conexion->query($consulta)) {
        
                        while ($row = $resultado->fetch_assoc()) {
                            $idusuario = $row["idusuario"];
                            $email = $row["email"];
                            $pass = $row["password"];
                    ?>
                            <tr class="fila_2">
                                <th><?php echo "$idusuario"; ?></th>
                                <th><?php echo "$email"; ?></th>
                                <th><?php echo "$pass"; ?></th>
                                <th class="admin_icon_col">
                                    <a href="../php/modificar.php?id=<?php echo "$idusuario"; ?>"><img src="../img/icon_lapiz.png" alt="icon_lapiz" class="admin_icon"></a>
                                    <a href="../php/eliminar.php?id=<?php echo "$idusuario"; ?>"><img src="../img/icon_basura.png" alt="icon_basura" class="admin_icon"></a>
                                </th>
                            </tr>
                    <?php
                        }
                        $resultado->free();
                    }
                    ?>
        
        
                </table>
            </div>
        </div>

        <div class="admin_cont">
            
        </div>            


    </div>
    <!---Fin fondo gris-->

    <!--Footer-->
    <?php include ('footer.php');?>
    <!--Fin Footer-->
</body>
</html>

