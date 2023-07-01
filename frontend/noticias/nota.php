<?php
include '../../conexion.php';
session_start();
$usuario= $_SESSION['usermane'];
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Grupo Palermo</title>
    <link rel="shortcut icon" href="../../img/logo-2-rbg.png" type="image/png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../../css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../../css/style.min.css" rel="stylesheet">
    <style>


    </style>
</head>

<body class="grey lighten-3">

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container-fluid">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="#">
                    <img src="../../img/logo-2.png" alt="" style="width: 50px;">
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="../../dashboard.php">Menú
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="#" target="_blank">Página Web</a>
                        </li>
                    </ul>

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">

                        <li>
                            <a class="nav-link border border-light rounded waves-effect" href="../../session_destroy.php"
                                style="background-color:#e73b3b; color:white; margin-left:10px;">
                                Cerrar sesión</a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
        <!-- Navbar -->

        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed">

            <h1 style="text-align: center; margin-top: 30px;">
                <img src="../../img/logo.png" alt="" style="width: 200px;">
            </h1>


            <div class="list-group list-group-flush">
                <a href="../../dashboard.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-chart-pie mr-3"></i>Dashboard
                </a>
                <a href="../perfil.php" class="list-group-item waves-effect list-group-item-action ">
                    <i class="fas fa-user mr-3"></i>Perfil</a>
                <a href="../noticias.php" class="list-group-item active waves-effect">
                    <i class="fas fa-table mr-3"></i>Noticias</a>
                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-money-bill-alt mr-3"></i>Ordenes</a>

            </div>

        </div>
        <!-- Sidebar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="pt-5 mx-lg-5">


        <div class="card mb-4 wow fadeIn container-fluid mt-5">

              <!--Card content-->
              <div class="card-body">

                <h2 class="h2 my-4">Titulo de noticia </h2>


                <blockquote class="blockquote">
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                  <footer class="blockquote-footer">CEO de GPP en
                    <cite title="Source Title">Empresa</cite>
                  </footer>
                </blockquote>

                <p class="h3 my-4">Subtitulo </p>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt corporis
                  ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                  consequuntur maiores sed eligendi.</p>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt corporis
                  ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                  consequuntur maiores sed eligendi.</p>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt corporis
                  ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                  consequuntur maiores sed eligendi.</p>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt corporis
                  ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                  consequuntur maiores sed eligendi.</p>

              </div>

            </div>

    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">

        <!--/.Call to action-->

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">

            <h5>Soporte técnico: (0155) 5572-7575</h5>

        </div>
        <!-- Social icons -->



    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="../../js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../../js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
    // Animations initialization
    new WOW().init();
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




</body>

</html>



<?php




?>