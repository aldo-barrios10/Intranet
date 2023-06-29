<?php
include 'conexion.php';
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
    <link rel="shortcut icon" href="img/logo-2-rbg.png" type="image/png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <style>
    .map-container {
        overflow: hidden;
        padding-bottom: 56.25%;
        position: relative;
        height: 0;
    }

    .map-container iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
    }
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
                    <img src="img/logo-2.png" alt="" style="width: 50px;">
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
                        <li class="nav-item active">
                            <a class="nav-link waves-effect" href="#">Menú
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="#" target="_blank">Página Web</a>
                        </li>
                    </ul>

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">

                        <li>
                            <a class="nav-link border border-light rounded waves-effect" href="./session_destroy.php"
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
                <img src="img/logo.png" alt="" style="width: 200px;">
            </h1>


            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item active waves-effect">
                    <i class="fas fa-chart-pie mr-3"></i>Dashboard
                </a>
                <a href="frontend/perfil.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-user mr-3"></i>Perfil</a>
                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-table mr-3"></i>Tablas</a>
                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-money-bill-alt mr-3"></i>Ordenes</a>

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
                        <span>Dashboard</span>
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
            <!-- Heading -->

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-9 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">

                            <canvas id="myChart"></canvas>

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 mb-4">

                    <!--Card-->
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header text-center">
                            Ordenes este año
                        </div>

                        <!--Card content-->
                        <div class="card-body">

                            <canvas id="pieChart"></canvas>

                        </div>

                    </div>
                    <!--/.Card-->

                    <!--Card-->
                    <div class="card mb-4">

                        <!--Card content-->
                        <div class="card-body" style="padding: 13px;">

                            <!-- List group links -->
                            <div class="list-group list-group-flush">
                                <a class="list-group-item list-group-item-action waves-effect">Ventas
                                    <span class="badge badge-success badge-pill pull-right">22%
                                        <i class="fas fa-arrow-up ml-1"></i>
                                    </span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Perdidas
                                    <span class="badge badge-danger badge-pill pull-right">5%
                                        <i class="fas fa-arrow-down ml-1"></i>
                                    </span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Ordenes
                                    <span class="badge badge-primary badge-pill pull-right">14</span>
                                </a>

                            </div>
                            <!-- List group links -->

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">

                            <!-- Table  -->
                            <table class="table table-hover">
                                <!-- Table head -->
                                <thead class="blue-grey lighten-4">
                                    <tr>
                                        <th>#</th>
                                        <th>Lorem</th>
                                        <th>Ipsum</th>
                                        <th>Dolor</th>
                                    </tr>
                                </thead>
                                <!-- Table head -->

                                <!-- Table body -->
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Cell 1</td>
                                        <td>Cell 2</td>
                                        <td>Cell 3</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Cell 4</td>
                                        <td>Cell 5</td>
                                        <td>Cell 6</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Cell 7</td>
                                        <td>Cell 8</td>
                                        <td>Cell 9</td>
                                    </tr>
                                </tbody>
                                <!-- Table body -->
                            </table>
                            <!-- Table  -->

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">

                            <!-- Table  -->
                            <table class="table table-hover">
                                <!-- Table head -->
                                <thead class="blue lighten-4">
                                    <tr>
                                        <th>#</th>
                                        <th>Lorem</th>
                                        <th>Ipsum</th>
                                        <th>Dolor</th>
                                    </tr>
                                </thead>
                                <!-- Table head -->

                                <!-- Table body -->
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Cell 1</td>
                                        <td>Cell 2</td>
                                        <td>Cell 3</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Cell 4</td>
                                        <td>Cell 5</td>
                                        <td>Cell 6</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Cell 7</td>
                                        <td>Cell 8</td>
                                        <td>Cell 9</td>
                                    </tr>
                                </tbody>
                                <!-- Table body -->
                            </table>
                            <!-- Table  -->

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-lg-6 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header">2022 - 2023</div>

                        <!--Card content-->
                        <div class="card-body">

                            <canvas id="lineChart"></canvas>

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-6 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header">Febrero - Marzo</div>

                        <!--Card content-->
                        <div class="card-body">

                            <canvas id="radarChart"></canvas>

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->

                <!--Grid column-->
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header">Main Location</div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Google map-->
                            <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1880.6652371333669!2d-99.14944979510608!3d19.48441273618219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f854179cd813%3A0xe4d66f30766f5b8b!2sCalz.%20Vallejo%20724%2C%20Coltongo%2C%20Azcapotzalco%2C%2002630%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses!2smx!4v1680729694879!5m2!1ses!2smx"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                            <!--Google Mapas-->

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Section: Modals-->
                        <section>

                            <!-- Frame Modal Top Info-->
                            <div class="modal fade top" id="frameModalTopInfoDemo" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                                <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
                                    <!--Content-->
                                    <div class="modal-content">
                                        <!--Body-->
                                        <div class="modal-body">
                                            <div class="row d-flex justify-content-center align-items-center">

                                                <p class="pt-3 pr-2">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Impedit nisi quo
                                                    provident fugiat reprehenderit nostrum quos..</p>

                                                <a role="button" class="btn btn-info">Get it now
                                                    <i class="far fa-gem ml-1"></i>
                                                </a>
                                                <a role="button" class="btn btn-outline-info waves-effect"
                                                    data-dismiss="modal">No,
                                                    thanks</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                            <!-- Frame Modal Bottom Success-->

                            <!-- Frame Modal Bottom Success-->
                            <div class="modal fade bottom" id="frameModalBottomSuccessDemo" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                                <div class="modal-dialog modal-frame modal-bottom modal-notify modal-success"
                                    role="document">
                                    <!--Content-->
                                    <div class="modal-content">
                                        <!--Body-->
                                        <div class="modal-body">
                                            <div class="row d-flex justify-content-center align-items-center">

                                                <p class="pt-3 pr-2">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Impedit nisi quo
                                                    provident fugiat reprehenderit nostrum quos..</p>

                                                <a role="button" class="btn btn-success">Get it now
                                                    <i class="far fa-gem ml-1"></i>
                                                </a>
                                                <a role="button" class="btn btn-outline-success waves-effect"
                                                    data-dismiss="modal">No, thanks</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                            <!-- Frame Modal Bottom Success-->

                            <!-- Side Modal Top Right Success-->
                            <div class="modal fade right" id="sideModalTRSuccessDemo" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                                <div class="modal-dialog modal-side modal-top-right modal-notify modal-success"
                                    role="document">
                                    <!--Content-->
                                    <div class="modal-content">
                                        <!--Header-->
                                        <div class="modal-header">
                                            <p class="heading lead">Modal Success</p>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="white-text">&times;</span>
                                            </button>
                                        </div>

                                        <!--Body-->
                                        <div class="modal-body">
                                            <div class="text-center">
                                                <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit
                                                    iusto nulla
                                                    aperiam blanditiis ad consequatur in dolores culpa, dignissimos,
                                                    eius
                                                    non possimus fugiat. Esse ratione fuga, enim, ab officiis totam.
                                                </p>
                                            </div>
                                        </div>

                                        <!--Footer-->
                                        <div class="modal-footer justify-content-center">
                                            <a role="button" class="btn btn-success">Get it now
                                                <i class="far fa-gem ml-1"></i>
                                            </a>
                                            <a role="button" class="btn btn-outline-success waves-effect"
                                                data-dismiss="modal">No,
                                                thanks</a>
                                        </div>
                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                            <!-- Side Modal Top Right Success-->

                            <!-- Side Modal Top Left Info-->
                            <div class="modal fade left" id="sideModalTLInfoDemo" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                                <div class="modal-dialog modal-side modal-top-left modal-notify modal-info"
                                    role="document">
                                    <!--Content-->
                                    <div class="modal-content">
                                        <!--Header-->
                                        <div class="modal-header">
                                            <p class="heading lead">Modal Info</p>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="white-text">&times;</span>
                                            </button>
                                        </div>

                                        <!--Body-->
                                        <div class="modal-body">

                                            <img src="https://mdbootstrap.com/wp-content/uploads/2016/11/admin-dashboard-bootstrap.jpg"
                                                alt="Material Design for Bootstrap - dashboard" class="img-fluid">

                                            <div class="text-center">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt
                                                    vero illo
                                                    error eveniet cum.
                                                </p>
                                            </div>
                                        </div>

                                        <!--Footer-->
                                        <div class="modal-footer justify-content-center">
                                            <a role="button" class="btn btn-info">Get it now
                                                <i class="far fa-gem ml-1"></i>
                                            </a>
                                            <a role="button" class="btn btn-outline-info waves-effect"
                                                data-dismiss="modal">No,
                                                thanks</a>
                                        </div>
                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                            <!-- Side Modal Top Left Info-->

                            <!-- Side Modal Bottom Right Danger-->
                            <div class="modal fade right" id="sideModalBRDangerDemo" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                                <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-danger"
                                    role="document">
                                    <!--Content-->
                                    <div class="modal-content">
                                        <!--Header-->
                                        <div class="modal-header">
                                            <p class="heading">Modal Danger</p>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="white-text">&times;</span>
                                            </button>
                                        </div>

                                        <!--Body-->
                                        <div class="modal-body">

                                            <div class="row">
                                                <div class="col-3">
                                                    <p></p>
                                                    <p class="text-center">
                                                        <i class="fas fa-shopping-cart fa-4x"></i>
                                                    </p>
                                                </div>

                                                <div class="col-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga,
                                                        molestiae
                                                        provident temporibus sunt earum.</p>
                                                    <h2>
                                                        <span class="badge">v52gs1</span>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Footer-->
                                        <div class="modal-footer justify-content-center">
                                            <a role="button" class="btn btn-danger">Get it now
                                                <i class="far fa-gem ml-1"></i>
                                            </a>
                                            <a role="button" class="btn btn-outline-danger waves-effect"
                                                data-dismiss="modal">No,
                                                thanks</a>
                                        </div>
                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                            <!-- Side Modal Bottom Right Danger-->

                            <!-- Side Modal Bottom Left Warning-->
                            <div class="modal fade left" id="sideModalBLWarningDemo" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                                <div class="modal-dialog modal-side modal-bottom-left modal-notify modal-warning"
                                    role="document">
                                    <!--Content-->
                                    <div class="modal-content">
                                        <!--Header-->
                                        <div class="modal-header">
                                            <p class="heading">Modal Warning</p>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="white-text">&times;</span>
                                            </button>
                                        </div>

                                        <!--Body-->
                                        <div class="modal-body">

                                            <div class="row">
                                                <div class="col-3 text-center">
                                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg"
                                                        alt="Michal Szymanski - founder of Material Design for Bootstrap"
                                                        class="img-fluid z-depth-1-half rounded-circle">
                                                    <div style="height: 10px"></div>
                                                    <p class="title mb-0">Jane</p>
                                                    <p class="text-muted " style="font-size: 13px">Consultant</p>
                                                </div>

                                                <div class="col-9">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga,
                                                        molestiae
                                                        provident temporibus sunt earum.</p>
                                                    <p class="card-text">
                                                        <strong>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                            elit.</strong>
                                                    </p>
                                                </div>
                                            </div>


                                        </div>

                                        <!--Footer-->
                                        <div class="modal-footer justify-content-center">
                                            <a role="button" class="btn btn-warning">Get it now
                                                <i class="far fa-gem ml-1"></i>
                                            </a>
                                            <a role="button" class="btn btn-outline-warning waves-effect"
                                                data-dismiss="modal">No,
                                                thanks</a>
                                        </div>
                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                            <!-- Side Modal Bottom Left Warning-->

                            <!--Modal Form Login with Avatar Demo-->
                            <div class="modal fade" id="modalLoginAvatarDemo" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
                                    <!--Content-->
                                    <div class="modal-content">

                                        <!--Header-->
                                        <div class="modal-header">
                                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%281%29.jpg"
                                                class="rounded-circle img-responsive" alt="Avatar photo">
                                        </div>
                                        <!--Body-->
                                        <div class="modal-body text-center mb-1">

                                            <h5 class="mt-1 mb-2">Maria Doe</h5>

                                            <div class="md-form ml-0 mr-0">
                                                <input type="password" type="text" id="form1" class="form-control ml-0">
                                                <label for="form1" class="ml-0">Enter password</label>
                                            </div>

                                            <div class="text-center mt-4">
                                                <button class="btn btn-cyan">Login
                                                    <i class="fas fa-sign-in-alt ml-1"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                            <!--Modal Form Login with Avatar Demo-->

                            <!--Modal: Login / Register Form Demo-->
                            <div class="modal fade" id="modalLRFormDemo" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Modal: Login / Register Form Demo-->

                            <!-- Central Modal Large Info-->
                            <div class="modal fade" id="centralModalLGInfoDemo" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-notify modal-info" role="document">
                                    <!--Content-->
                                    <div class="modal-content">
                                        <!--Header-->
                                        <div class="modal-header">
                                            <p class="heading lead">Modal Info</p>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="white-text">&times;</span>
                                            </button>
                                        </div>

                                        <!--Body-->
                                        <div class="modal-body">
                                            <div class="text-center">
                                                <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit
                                                    iusto nulla
                                                    aperiam blanditiis ad consequatur in dolores culpa, dignissimos,
                                                    eius
                                                    non possimus fugiat. Esse ratione fuga, enim, ab officiis totam.
                                                </p>
                                            </div>
                                            <img src="https://mdbootstrap.com/wp-content/uploads/2016/11/admin-dashboard-bootstrap.jpg"
                                                alt="Material Design for Bootstrap - dashboard" class="img-fluid">

                                        </div>

                                        <!--Footer-->
                                        <div class="modal-footer">
                                            <a role="button" class="btn btn-info">Get it now
                                                <i class="far fa-gem ml-1"></i>
                                            </a>
                                            <a role="button" class="btn btn-outline-info waves-effect"
                                                data-dismiss="modal">No,
                                                thanks</a>
                                        </div>
                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                            <!-- Central Modal Large Info-->

                            <!-- Central Modal Fluid Success-->
                            <div class="modal fade" id="centralModalFluidSuccessDemo" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-fluid modal-notify modal-success" role="document">
                                    <!--Content-->
                                    <div class="modal-content">
                                        <!--Header-->
                                        <div class="modal-header">
                                            <p class="heading lead">Modal Success</p>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="white-text">&times;</span>
                                            </button>
                                        </div>

                                        <!--Body-->
                                        <div class="modal-body">
                                            <div class="text-center">
                                                <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit
                                                    iusto nulla
                                                    aperiam blanditiis ad consequatur in dolores culpa, dignissimos,
                                                    eius
                                                    non possimus fugiat. Esse ratione fuga, enim, ab officiis totam.
                                                </p>
                                            </div>
                                            <ul class="list-group z-depth-0">
                                                <li class="list-group-item justify-content-between">
                                                    Cras justo odio
                                                    <span class="badge badge-primary badge-pill">14</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Dapibus ac facilisis in
                                                    <span class="badge badge-primary badge-pill">2</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Morbi leo risus
                                                    <span class="badge badge-primary badge-pill">1</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Cras justo odio
                                                    <span class="badge badge-primary badge-pill">14</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Dapibus ac facilisis in
                                                    <span class="badge badge-primary badge-pill">2</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Morbi leo risus
                                                    <span class="badge badge-primary badge-pill">1</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <!--Footer-->
                                        <div class="modal-footer">
                                            <a role="button" class="btn btn-success">Get it now
                                                <i class="far fa-gem ml-1"></i>
                                            </a>
                                            <a role="button" class="btn btn-outline-success waves-effect"
                                                data-dismiss="modal">No,
                                                thanks</a>
                                        </div>
                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                            <!-- Central Modal Fluid Success-->

                            <!-- Full Height Modal Right Success Demo-->
                            <div class="modal fade right" id="fluidModalRightSuccessDemo" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                                <div class="modal-dialog modal-full-height modal-right modal-notify modal-success"
                                    role="document">
                                    <!--Content-->
                                    <div class="modal-content">
                                        <!--Header-->
                                        <div class="modal-header">
                                            <p class="heading lead">Modal Success</p>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="white-text">&times;</span>
                                            </button>
                                        </div>

                                        <!--Body-->
                                        <div class="modal-body">
                                            <div class="text-center">
                                                <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit
                                                    iusto nulla
                                                    aperiam blanditiis ad consequatur in dolores culpa, dignissimos,
                                                    eius
                                                    non possimus fugiat. Esse ratione fuga, enim, ab officiis totam.
                                                </p>
                                            </div>
                                            <ul class="list-group z-depth-0">
                                                <li class="list-group-item justify-content-between">
                                                    Cras justo odio
                                                    <span class="badge badge-primary badge-pill">14</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Dapibus ac facilisis in
                                                    <span class="badge badge-primary badge-pill">2</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Morbi leo risus
                                                    <span class="badge badge-primary badge-pill">1</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Cras justo odio
                                                    <span class="badge badge-primary badge-pill">14</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Dapibus ac facilisis in
                                                    <span class="badge badge-primary badge-pill">2</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Morbi leo risus
                                                    <span class="badge badge-primary badge-pill">1</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <!--Footer-->
                                        <div class="modal-footer justify-content-center">
                                            <a role="button" class="btn btn-success">Get it now
                                                <i class="far fa-gem ml-1"></i>
                                            </a>
                                            <a role="button" class="btn btn-outline-success waves-effect"
                                                data-dismiss="modal">No,
                                                thanks</a>
                                        </div>
                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                            <!-- Full Height Modal Right Success Demo-->

                            <!-- Full Height Modal Left Info Demo-->
                            <div class="modal fade left" id="fluidModalLeftInfoDemo" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                                <div class="modal-dialog modal-full-height modal-left modal-notify modal-info"
                                    role="document">
                                    <!--Content-->
                                    <div class="modal-content">
                                        <!--Header-->
                                        <div class="modal-header">
                                            <p class="heading lead">Modal Success</p>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="white-text">&times;</span>
                                            </button>
                                        </div>

                                        <!--Body-->
                                        <div class="modal-body">
                                            <div class="text-center">
                                                <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit
                                                    iusto nulla
                                                    aperiam blanditiis ad consequatur in dolores culpa, dignissimos,
                                                    eius
                                                    non possimus fugiat. Esse ratione fuga, enim, ab officiis totam.
                                                </p>
                                            </div>
                                            <ul class="list-group z-depth-0">
                                                <li class="list-group-item justify-content-between">
                                                    Cras justo odio
                                                    <span class="badge badge-primary badge-pill">14</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Dapibus ac facilisis in
                                                    <span class="badge badge-primary badge-pill">2</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Morbi leo risus
                                                    <span class="badge badge-primary badge-pill">1</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Cras justo odio
                                                    <span class="badge badge-primary badge-pill">14</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Dapibus ac facilisis in
                                                    <span class="badge badge-primary badge-pill">2</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Morbi leo risus
                                                    <span class="badge badge-primary badge-pill">1</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <!--Footer-->
                                        <div class="modal-footer justify-content-center">
                                            <a role="button" class="btn btn-info">Get it now
                                                <i class="far fa-gem ml-1"></i>
                                            </a>
                                            <a role="button" class="btn btn-outline-info waves-effect"
                                                data-dismiss="modal">No,
                                                thanks</a>
                                        </div>
                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                            <!-- Full Height Modal Right Info Demo-->

                            <!-- Full Height Modal Top Warning Demo-->
                            <div class="modal fade top" id="fluidModalTopWarningDemo" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                                <div class="modal-dialog modal-full-height modal-top modal-notify modal-warning"
                                    role="document">
                                    <!--Content-->
                                    <div class="modal-content">
                                        <!--Header-->
                                        <div class="modal-header">
                                            <p class="heading lead">Modal Warning</p>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="white-text">&times;</span>
                                            </button>
                                        </div>

                                        <!--Body-->
                                        <div class="modal-body">
                                            <div class="text-center">
                                                <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                                            </div>
                                            <ul class="list-group z-depth-0">
                                                <li class="list-group-item justify-content-between">
                                                    Cras justo odio
                                                    <span class="badge badge-primary badge-pill">14</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Dapibus ac facilisis in
                                                    <span class="badge badge-primary badge-pill">2</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Morbi leo risus
                                                    <span class="badge badge-primary badge-pill">1</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <!--Footer-->
                                        <div class="modal-footer">
                                            <a role="button" class="btn btn-warning">Get it now
                                                <i class="far fa-gem ml-1"></i>
                                            </a>
                                            <a role="button" class="btn btn-outline-warning waves-effect"
                                                data-dismiss="modal">No,
                                                thanks</a>
                                        </div>
                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                            <!-- Full Height Modal Top Warning Demo-->

                            <!-- Full Height Modal Bottom Danger Demo-->
                            <div class="modal fade bottom" id="fluidModalBottomDangerDemo" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                                <div class="modal-dialog modal-full-height modal-bottom modal-notify modal-danger"
                                    role="document">
                                    <!--Content-->
                                    <div class="modal-content">
                                        <!--Header-->
                                        <div class="modal-header">
                                            <p class="heading lead">Modal Danger</p>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="white-text">&times;</span>
                                            </button>
                                        </div>

                                        <!--Body-->
                                        <div class="modal-body">
                                            <div class="text-center">
                                                <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                                            </div>
                                            <ul class="list-group z-depth-0">
                                                <li class="list-group-item justify-content-between">
                                                    Cras justo odio
                                                    <span class="badge badge-primary badge-pill">14</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Dapibus ac facilisis in
                                                    <span class="badge badge-primary badge-pill">2</span>
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    Morbi leo risus
                                                    <span class="badge badge-primary badge-pill">1</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <!--Footer-->
                                        <div class="modal-footer">
                                            <a role="button" class="btn btn-danger">Get it now
                                                <i class="far fa-gem ml-1"></i>
                                            </a>
                                            <a role="button" class="btn btn-outline-danger waves-effect"
                                                data-dismiss="modal">No,
                                                thanks</a>
                                        </div>
                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                            <!-- Full Height Modal Bottom Danger Demo-->

                        </section>
                        <!--Section: Modals-->

                        <!-- Card header -->
                        <div class="card-header">Modals</div>

                        <!--Card content-->
                        <div class="card-body">

                            <div class="text-center mb-5">
                                <p class="lead">Click buttons below to launch modals demo</p>
                            </div>

                            <!-- First row-->
                            <div class="row">

                                <!--First column-->
                                <div class="col-md-3">
                                    <h5 class="text-center mb-3">Frame Modal</h5>

                                    <img src="https://mdbootstrap.com/img/brandflow/modal4.jpg" alt="MDB graphics"
                                        class="img-fluid z-depth-1">
                                    <div class="text-center">
                                        <h5 class="my-3">Position</h5>

                                        <a class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#frameModalTopInfoDemo" data-backdrop="false">Top</a>
                                        <br>
                                        <a class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#frameModalBottomSuccessDemo" data-backdrop="false">Bottom</a>
                                    </div>
                                </div>
                                <!--First column-->

                                <!--Second column-->
                                <div class="col-md-3">
                                    <h5 class="text-center mb-3">Side Modal</h5>

                                    <img src="https://mdbootstrap.com/img/brandflow/modal3.jpg" alt="MDB graphics"
                                        class="img-fluid z-depth-1">
                                    <div class="text-center">
                                        <h5 class="my-3">Position</h5>

                                        <a class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#sideModalTRSuccessDemo" data-backdrop="false">Top Right</a>
                                        <br>
                                        <a class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#sideModalTLInfoDemo">Top
                                            Left</a>
                                        <br>
                                        <a class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#sideModalBRDangerDemo">Bottom
                                            Right</a>
                                        <br>
                                        <a class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#sideModalBLWarningDemo">Bottom
                                            Left</a>
                                    </div>
                                </div>
                                <!--Second column-->

                                <!--Third column-->
                                <div class="col-md-3">
                                    <h5 class="text-center mb-3">Central Modal</h5>

                                    <img src="https://mdbootstrap.com/img/brandflow/modal2.jpg" alt="MDB graphics"
                                        class="img-fluid z-depth-1">
                                    <div class="text-center">
                                        <h5 class="my-3">Size</h5>

                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#modalLoginAvatarDemo">Small
                                        </button>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#modalLRFormDemo">Medium
                                        </button>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#centralModalLGInfoDemo">Large
                                        </button>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#centralModalFluidSuccessDemo">Fluid
                                        </button>
                                    </div>
                                </div>
                                <!--Third column-->

                                <!--Fourth column-->
                                <div class="col-md-3">
                                    <h5 class="text-center mb-3">Fluid Modal</h5>

                                    <img src="https://mdbootstrap.com/img/brandflow/modal1.jpg" alt="MDB graphics"
                                        class="img-fluid z-depth-1">
                                    <div class="text-center">
                                        <h5 class="my-3">Position</h5>

                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#fluidModalRightSuccessDemo">Right</button>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#fluidModalLeftInfoDemo">Left</button>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#fluidModalTopWarningDemo">Top</button>
                                        <br>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#fluidModalBottomDangerDemo">Bottom</button>
                                    </div>
                                </div>
                                <!--Fourth column-->

                            </div>
                            <!-- /.First row-->

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

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
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
    // Animations initialization
    new WOW().init();
    </script>

    <!-- Charts -->
    <script>
    // Line
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["CDMX.", "QRO.", "NL.", "VR.", "JAL.", "MEX.", "QROO."],
            datasets: [{
                label: 'Ordenes este año',
                data: [300, 50, 100, 40, 120, 200, 135],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(200, 200, 104, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(200, 200, 104, 0.2)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    //pie
    var ctxP = document.getElementById("pieChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
        type: 'pie',
        data: {
            labels: ["CDMX.", "QRO.", "NL.", "VR.", "JAL.", "MEX.", "QROO."],
            datasets: [{
                data: [300, 50, 100, 40, 120, 200, 135],
                backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360", "#975511",
                    "#4655FF"
                ],
                hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
            }]
        },
        options: {
            responsive: true,
            legend: false
        }
    });


    //line
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
            labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio"],
            datasets: [{
                    label: "Año pasado",
                    backgroundColor: [
                        'rgba(105, 0, 132, .2)',
                    ],
                    borderColor: [
                        'rgba(200, 99, 132, .7)',
                    ],
                    borderWidth: 2,
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
                {
                    label: "Año actual",
                    backgroundColor: [
                        'rgba(0, 137, 132, .2)',
                    ],
                    borderColor: [
                        'rgba(0, 10, 130, .7)',
                    ],
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        },
        options: {
            responsive: true
        }
    });


    //radar
    var ctxR = document.getElementById("radarChart").getContext('2d');
    var myRadarChart = new Chart(ctxR, {
        type: 'radar',
        data: {
            labels: ["CDMX.", "QRO.", "NL.", "VR.", "JAL.", "MEX.", "QROO."],
            datasets: [{
                label: "Mes pasado",
                data: [65, 59, 90, 81, 56, 55, 40],
                backgroundColor: [
                    'rgba(105, 0, 132, .2)',
                ],
                borderColor: [
                    'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2
            }, {
                label: "Este mes",
                data: [28, 48, 40, 19, 96, 27, 100],
                backgroundColor: [
                    'rgba(0, 250, 220, .2)',
                ],
                borderColor: [
                    'rgba(0, 213, 132, .7)',
                ],
                borderWidth: 2
            }]
        },
        options: {
            responsive: true
        }
    });

    //doughnut
    var ctxD = document.getElementById("doughnutChart").getContext('2d');
    var myLineChart = new Chart(ctxD, {
        type: 'doughnut',
        data: {
            labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
            datasets: [{
                data: [300, 50, 100, 40, 120],
                backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
                hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
            }]
        },
        options: {
            responsive: true
        }
    });
    </script>

    <!--Google Mapas-->
    <script src="https://maps.google.com/maps/api/js"></script>
    <script>
    // Regular map
    function regular_map() {
        var var_location = new google.maps.LatLng(40.725118, -73.997699);

        var var_mapoptions = {
            center: var_location,
            zoom: 14
        };

        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);

        var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title: "New York"
        });
    }

    new Chart(document.getElementById("horizontalBar"), {
        "type": "horizontalBar",
        "data": {
            "labels": ["Red", "Orange", "Yellow", "Green", "Blue", "Purple", "Grey"],
            "datasets": [{
                "label": "My First Dataset",
                "data": [22, 33, 55, 12, 86, 23, 14],
                "fill": false,
                "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
                    "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"
                ],
                "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
                    "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)",
                    "rgb(201, 203, 207)"
                ],
                "borderWidth": 1
            }]
        },
        "options": {
            "scales": {
                "xAxes": [{
                    "ticks": {
                        "beginAtZero": true
                    }
                }]
            }
        }
    });
    </script>
</body>

</html>
<?php

?>