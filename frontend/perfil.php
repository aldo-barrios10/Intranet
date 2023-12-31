<?php
include '../conexion.php';
session_start();
$usuario= $_SESSION['usermane'];
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$id_empleado = $_SESSION['id_empleado'];




try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Realizar la consulta SQL
    $query = "SELECT id_sede, id_puesto, telefono, img_perfil FROM empleados where id_empleado = $id_empleado";
    $statement = $conexion->query($query);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    $telefono = $result[0]['telefono'];
    $sede = $result[0]['id_sede'];
    $puesto = $result[0]['id_puesto'];
    $img=$result[0]['img_perfil'];

    $query = "SELECT nombre_puesto FROM puestos where id_puesto = $puesto";
    $statement = $conexion->query($query);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    $puesto = $result[0]['nombre_puesto'];

    $query = "SELECT nombre_sede FROM sedes where id_sede = $sede";
    $statement = $conexion->query($query);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    $sede= $result[0]['nombre_sede'];

    $query = "SELECT id_venta,producto, cantidad,fecha FROM ventas where id_vendedor = $id_empleado";
    $statement = $conexion->query($query);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Grupo Palermo </title>
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
                <a href="#" class="list-group-item active waves-effect ">
                    <i class="fas fa-user mr-3"></i>Perfil</a>
                <a href="noticias.php" class="list-group-item list-group-item-action waves-effect">
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
                        <span>Bienvendio a tu perfil <?php echo $nombre; ?></span>
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


            <div class="row wow fadeIn">
                    <div class="card-body" style="padding: 1rem;">
                        <div class="card mb-3">
                            <div class="row g-0" style="margin-left:0;">
                                <div class="col-md-4 text-center text-white"
                                    style="border-top-left-radius: .3rem; border-bottom-left-radius: .3rem; background-color: #1c5c89;">
                                    <img src="../bg.jpg"
                                        alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                    <h5><?php echo $nombre; ?> <?php echo $apellido; ?></h5>
                                    <p><?php echo $puesto; ?></p>
                                    <i class="far fa-edit mb-5"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body p-4">
                                        <h6>Información</h6>
                                        <hr class="mt-0 mb-4">
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">
                                                <h6>Email</h6>
                                                <p class="text-muted"><?php echo $usuario; ?>@gpp.com.mx</p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <h6>Teléfono</h6>
                                                <p class="text-muted"><?php echo $telefono; ?></p>
                                            </div>
                                        </div>
                                        <hr class="mt-0 mb-4">
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">
                                                <h6>Sede</h6>
                                                <p class="text-muted"><?php echo $sede; ?></p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <h6>Departamento</h6>
                                                <p class="text-muted"><?php echo $puesto; ?></p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start">
                                            <a href="#!"><i class="fab fa-facebook-f fa-lg mr-4"></i></a>
                                            <a href="#!"><i class="fab fa-twitter fa-lg mr-4"></i></a>
                                            <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>




            <!--Grid row-->
            <div class="row wow fadeIn">
                <!--Grid column-->
                <div class="col-md-12 mb-4">
                    <!--Card-->
                    <div class="card">
                        <!--Card content-->
                        <div class="card-body">

                            <?php
                                // Imprimir los resultados dentro de un div
                                echo "<div>";
                                echo "<table class='table'>";
                                echo "<tr>";
                                echo "<th>ID</th>";
                                echo "<th>Producto</th>";
                                echo "<th>Cantidad</th>";
                                echo "<th>Fecha</th>";
                                echo "</tr>";
                                
                                foreach ($result as $row) {
                                    echo "<tr>";
                                    echo "<td>".$row['id_venta']."</td>";
                                    echo "<td>".$row['producto']."</td>";
                                    echo "<td>".$row['cantidad']."</td>";
                                    echo "<td>".$row['fecha']."</td>";
                                    echo "</tr>";
                                }
                                
                                echo "</table>";
                                echo "</div>";
    
                             ?>
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

        </div>

        <div class="col-md-6 mb-4">

            <!--Card-->
            <div class="card">

                <!--Section: Modals-->
                <section>

                    <div class="modal fade left" id="sideModalTLInfoDemo" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                        <div class="modal-dialog modal-side modal-top-left modal-notify modal-info" role="document">
                            <!--Content-->
                            <div class="modal-content">
                                <!--Header-->
                                <div class="modal-header">
                                    <p class="heading lead">Aviso importante</p>

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
                                    <a role="button" class="btn btn-outline-info waves-effect"
                                        data-dismiss="modal">Recibido</a>
                                </div>
                            </div>
                            <!--/.Content-->
                        </div>
                    </div>


                </section>
                <!--Section: Modals-->



            </div>
            <!--/.Card-->

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

    <script>
    $(document).ready(function() {
        $('#sideModalTLInfoDemo').modal('show');
    });
    </script>
</body>
</html>
<?php?>