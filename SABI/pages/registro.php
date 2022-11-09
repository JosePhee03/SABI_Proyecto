
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

    <title>Registro</title>

</head>
<body>

    <!--Nav-->
    <?php
        include('../pages/nav.php');
    ?>
    <!--Fin Nav-->

    <!---Fondo Gris-->
    <div class="fondo">

        <!---Contenedor del registro-->
        <div class="registro_cont carta">
            <!---Elementos del registro-->
            <div class="registro_encabezado">
                <div class="separador_3">
                </div>
                <div class="encabezado_text">
                    <h2 class="titulo_alt">Cuenta SABI</h2>
                </div>
                <div class="encabezado_logo">
                    <img src="../img/logo_sabi_alt.png" alt="logo_sabi_alt" class="logo_sabi_alt">
                </div>
                
                
                
            </div>
            <h3 class="subtitulo-bold">Registrarse</h3>

            <!---Formulario del registro-->
            <form action="../php/insertar.php" method="post" class="formulario">
                <p class="subtitulo">Email</p>
                <input type="email" name="_email" class="input parrafo" required>

                <p class="subtitulo">Contraseña</p>
                <input type="password" name="_pass" class="input parrafo" required>

                <p class="subtitulo">Confirmar contraseña</p>
                <input type="password" name="_pass2" class="input parrafo" required>

                <div class="centrar">
                    <button type="submit" class="subtitulo boton_principal">Registrarse</button>
                </div>
                


            </form>
            <!---Formulario del registro-->
            <div class="registro_pie">
                <p class="parrafo">¿Ya tienes una cuenta? <a href="../pages/sesion.php" class="parrafo-link">Iniciar Sesión</a>.</p>
            </div>
            <!---Fin Elementos del registro-->


        </div>
        <!---Contenedor del registro-->

    </div>
    <!---Fin fondo gris-->

    <!--Footer-->
    <?php include ('footer.php');?>
    <!--Fin Footer-->
</body>
</html>

