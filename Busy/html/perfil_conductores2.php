<?php
//DESTRUIR LA SESION DE UN USUARIO LOGEADO AL MOMENTO DE CERRAR SESION
session_start();
if (empty($_SESSION["id"])) {
    header("location: page-login-2.php");}
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Busy</title>
    <meta name="author" content="Nile-Theme">
    <meta name="robots" content="index follow">
    <meta name="googlebot" content="index follow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Travel, HTML5, CSS3, Hotel , Multipurpose, Template, Create a Travel website fast">
    <meta name="description" content="HTML5 Multipurpose Template, Create a website fast">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800|Poppins:300i,400,300,700,400i,500|Ubuntu:300i,400,300,700,400i,500|Raleway:400,500,600,700"
        rel="stylesheet">
    <!-- CSS Files -->


    <!-- Owl Carousel Assets -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/travlez-jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flag-icon.min.css">
    <link rel="stylesheet" href="css/sb-admin.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

    <!-- Cargar el CSS de Boostrap-->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	crossorigin="anonymous">
	<!-- Cargar estilos propios -->
	<link href="style.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark  fixed-top background-main-color" id="mainNav">
        <a class="navbar-brand" href="perfil_conductores.html"><i class="fa fa-fw" aria-hidden="true"
                title="Copy to use bus"></i> Busy</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav navbar-sidenav background-third-color" id="exampleAccordion">

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Rutas">
                    <a class="nav-link" href="inicio-ruta.php">
                        <i class="fa fa-fw fa-user-circle"></i>
                        <span class="nav-link-text">Rutas</span>
                    </a>
                </li>
            </ul>



            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">

                    <a href="#" class="margin-top-5px d-inline-block text-white margin-right-70px">
                        <img src="http://placehold.it/60x60" class="height-30px border-radius-30" alt="">
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-fw fa-sign-out"></i>Cerrar sesión</a>
                </li>
            </ul>

        </div>
    </nav>
    <div class="content-wrapper">
        <div class="container-fluid">


            <div class="row padding-top-50px">


                <div class="col-12">

                    <div class="alert alert-success">
                        <strong>Compra realizada</strong> Maria compró 2 tiquetes para tu vehiculo.
                    </div>

                    <!-- -->
<!-- Termina la definición del menú -->
<main role="main" class="container">
    <div class="row">
        <!-- Aquí pon las col-x necesarias, comienza tu contenido, etcétera -->
        <div class="col-12">
            <button id="btnIniciar" class="btn btn-info">Iniciar</button>
            <button id="btnDetener" class="btn btn-danger">Detener</button>
            <br>
            <strong>Latitud: </strong> <span id="latitud"></span>
            <strong>Longitud: </strong> <span id="longitud"></span>
            <br>
            <a href="./ubicaciones.txt">Ver ubicaciones</a>
            <br>
            <pre id="log"></pre>
        </div>
    </div>
</main>
<script src="ubicacion-js-php-master/script.js">
</script>

                </div>
            </div>


        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright © Busy 2022</small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Desea cerrar sesión?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Selecciona salir si quieres cerrar la sesión actual, en caso contrario
                        selecciona cancelar.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="controlador/cerrar_sesion.php">Salir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    

    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/sticky-sidebar.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>


</body>

</html>