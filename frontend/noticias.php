<?php
include '../conexion.php';
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
    <link rel="shortcut icon" href="../img/logo-2-rbg.png" type="image/png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../css/style.min.css" rel="stylesheet">
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
                    <img src="../img/logo-2.png" alt="" style="width: 50px;">
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
                            <a class="nav-link waves-effect" href="../dashboard.php">Menú
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="#" target="_blank">Página Web</a>
                        </li>
                    </ul>

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">

                        <li>
                            <a class="nav-link border border-light rounded waves-effect" href="../session_destroy.php"
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
                <img src="../img/logo.png" alt="" style="width: 200px;">
            </h1>


            <div class="list-group list-group-flush">
                <a href="../dashboard.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-chart-pie mr-3"></i>Dashboard
                </a>
                <a href="perfil.php" class="list-group-item waves-effect list-group-item-action ">
                    <i class="fas fa-user mr-3"></i>Perfil</a>
                <a href="#" class="list-group-item active waves-effect">
                    <i class="fas fa-table mr-3"></i>Noticias</a>
            </div>

        </div>
        <!-- Sidebar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">



            <!-- Heading -->
            <div class="card mb-4 wow fadeIn">

                <!--Card content-->
                <div class="card-body d-sm-flex justify-content-between">

                    <h4 class="mb-2 mb-sm-0 pt-1">
                        <span>Estas son las ultimas noticias</span>
                    </h4>

                    <form class="d-flex justify-content-center">
                        <!-- Default input -->
                        <input type="search" placeholder="Busqueda" aria-label="Search" class="form-control">
                        <button class="btn btn-primary btn-sm my-0 p" type="submit">
                            <i class="fas fa-search"></i>
                        </button>

                    </form>

                </div>
            </div>
        </div>

        <!--Section: Magazine v.1-->
        <section class="wow fadeIn" style="margin: 15px">
            <!--Grid row-->
            <div class="row text-left">

                <!--Grid column-->
                <div class="col-lg-6 col-md-12">

                    <!--Image-->
                    <div class="view overlay rounded z-depth-1-half mb-3">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/3.jpg" class="img-fluid"
                            alt="Sample post image">
                        <a href="noticias/nota.php">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Excerpt-->
                    <div class="news-data">
                        <p>
                            <strong>
                                <i class="far fa-clock"></i> 20/05/2023</strong>
                        </p>
                    </div>
                    <h3>
                        <a href="noticias/nota.php">
                            <strong>Titulo de noticia</strong>
                        </a>
                    </h3>
                    <p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                        maxime
                        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                    </p>

                    <!--/Featured news-->

                    <hr>

                    <!--Small news-->
                    <div class="row">
                        <div class="col-md-3">

                            <!--Image-->
                            <div class="view overlay rounded z-depth-1">
                                <img src="https://mdbootstrap.com/img/Photos/Others/photo10.jpg" class="img-fluid"
                                    alt="Minor sample post image">
                                <a href="noticias/nota.php">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>

                        <!--Excerpt-->
                        <div class="col-md-9">
                            <p class="dark-grey-text">
                                <strong>03/01/2023</strong>
                            </p>
                            <a href="noticias/nota.php">Lorem ipsum dolor sit amet
                                <i class="fas fa-angle-right float-right"></i>
                            </a>
                        </div>

                    </div>
                    <!--/Small news-->
                    <hr>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-6 col-md-12">
                    <!--Image-->
                    <div class="view overlay rounded z-depth-1-half mb-3">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/57.jpg" class="img-fluid"
                            alt="Sample post image">
                        <a href="noticias/nota.php">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Excerpt-->
                    <div class="news-data">
                        <p>
                            <strong>
                                <i class="far fa-clock"></i> 15/05/2023</strong>
                        </p>
                    </div>
                    <h3>
                        <a href="noticias/nota.php">
                            <strong>Titulo de noticia</strong>
                        </a>
                    </h3>
                    <p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                        maxime
                        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                    </p>
                    <!--/Featured news-->
                    <hr>
                    <!--Small news-->
                    <div class="row">
                        <div class="col-md-3">

                            <!--Image-->
                            <div class="view overlay rounded z-depth-1">
                                <img src="https://mdbootstrap.com/img/Photos/Others/photo2.jpg" class="img-fluid"
                                    alt="Minor sample post image">
                                <a href="noticias/nota.php">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>

                        <!--Excerpt-->
                        <div class="col-md-9">
                            <p class="dark-grey-text">
                                <strong>19/03/2023</strong>
                            </p>
                            <a href="noticias/nota.php" >Lorem ipsum dolor sit amet
                                <i class="fas fa-angle-right float-right"></i>
                            </a>
                        </div>

                    </div>
                    <!--/Small news-->
                    <hr>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--/Section: Magazine v.1-->

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
    <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
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