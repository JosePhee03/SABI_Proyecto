<?php
include('../php/config.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <nav>

        <!---Contenedor logo-->
        <div class="logo">
            <img src="../img/logo_sabi.png" alt="logo_sabi" class="logo__img">
            <a href="#" class="logo__text titulo">SABI</a>
        </div>
        <!---Fin Contenedor logo-->

        <!---Contenedor menu-->
        <div class="menu">
            <a href="#"class="menu__cont subtitulo">Funciones</a>
            <a href="#"class="menu__cont subtitulo">Preguntas</a>
            <a href="#"class="menu__cont subtitulo">Productos</a>
            <a href="#"class="menu__cont subtitulo">Contacto</a>
        </div>
        <!---Fin Contenedor menu-->

        <!---Contenedor usuario-->
        <div class="user">
            <a href="#" class="user__text subtitulo-bold">Iniciar Sesión</a>
            <img src="../img/icon_user.png" alt="user_img" class="user__img">
        </div>
        <!---Fin Contenedor usuario-->

    </nav>
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
                        <th>Contraceña</th>
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
    <footer>

        <!---Contenedor ayuda-->
        <div class="ayuda">
            <img src="../img/logo_sabi_negro.png" alt="logo_sabi_negro" class="footer__logo">
            <h2 class="titulo">&copy; 2022 SABI</h2>
            <a href="#" class="subtitulo-bold ayuda__text">Ayuda</a>
        </div>
        <!---Fin Contenedor ayuda-->

        <!---Contenedor redes-->
        <div class="redes">
            <a href="#" class="redes__cont">
                <img src="../img/icon_facebook.png" alt="icon_facebook" class="redes__icon">
            </a>
            <a href="#" class="redes__cont">
                <img src="../img/icon_youtube.png" alt="icon_youtube" class="redes__icon">
            </a>
            <a href="#" class="redes__cont">
                <img src="../img/icon_intagram.png" alt="icon_instagram" class="redes__icon">
            </a>
        </div>
        <!---Fin Contenedor redes-->

        <!---Contenedor subir-->
        <div class="subir">
            <a href="#" class="subtitulo-bold subir__text">Subir</a>
        </div>
        <!---Fin Contenedor subir-->

    </footer>
    <!--Fin Footer-->
</body>
</html>

