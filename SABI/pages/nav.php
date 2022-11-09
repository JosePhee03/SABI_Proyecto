<nav>
        <!---Contenedor logo-->
        <div class="logo">
            <img src="../img/logo_sabi.png" alt="logo_sabi" class="logo_img">
            <a href="#" class="logo_text titulo">SABI</a>
        </div>
        <!---Fin Contenedor logo-->

        <!---Contenedor menu-->
        <div class="menu">
            <a href="#"class="menu_cont subtitulo">Funciones</a>
            <a href="#"class="menu_cont subtitulo">Preguntas</a>
            <a href="#"class="menu_cont subtitulo">Productos</a>
            <a href="#"class="menu_cont subtitulo">Contacto</a>
        </div>
        <!---Fin Contenedor menu-->

        <!---Contenedor usuario-->
        <div class="user">
            <ul class="user_menu">

                <!---Nombre y logo usuario-->
                <li>
                    <div class="user_cont">
                        <h6 class="subtitulo-bold user_text">
                            <?php
                                //email del Usuario
                                session_start();

                                if(empty($_SESSION['usuario'])){
                                    echo "Usuario";
                                }else{
                                    echo $_SESSION['usuario'];
                                }
                                
                            ?>
                        </h6>
                        <img src="../img/icon_user.png" alt="user_img" class="user_img">
                    </div>
                <!---Fin Nombre y logo usuario-->

                <!--Menu desplegable Usuario-->
                    <ul class="desplegable">
                        <li class="">
                            <a href="#"class="parrafo">Mi cuenta</a>
                        </li>
                        <li class="desplegable_link-end">
                            <a href="../php/cerrar.php"class=" parrafo">Salir</a>
                        </li>

                    </ul>
                    <!--Fin Menu desplegable Usuario-->
                </li>
            </ul>
        </div>
        <!---Fin Contenedor usuario-->

    </nav>
