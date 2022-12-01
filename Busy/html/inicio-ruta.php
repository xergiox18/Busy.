<?php
//DESTRUIR LA SESION DE UN USUARIO LOGEADO AL MOMENTO DE CERRAR SESION
session_start();
if (empty($_SESSION["id"])) {
    header("location: page-login-2.php");}
?>


<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Travelz HTML5 Multipurpose Travel Template</title>
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

    <!-- css bootstrap para formulario de seleccion-->
    <!-- CSS only -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
-->
</head>

<body>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark  fixed-top background-main-color" id="mainNav">
        <a class="navbar-brand" href="index.html"><i class="fa fa-plane margin-right-8px"></i> travlez</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav navbar-sidenav background-third-color" id="exampleAccordion">

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Rutas">
                    <a class="nav-link" href="perfil_conductores2.php">
                        <i class="fa fa-fw fa-user-circle"></i>
                        <span class="nav-link-text">Control de gps</span>
                    </a>
                </li>


                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Rutas">
                    <a class="nav-link" href="inicio-ruta.php">
                        <i class="fa fa-fw fa-user-circle"></i>
                        <span class="nav-link-text">Rutas</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                        <li>
                            <a href="dashboard-v2-packages.html">Packages</a>
                        </li>
                        <li>
                            <a href="dashboard-v2-404-page.html">404 Page</a>
                        </li>
                        <li>
                            <a href="dashboard-v2-blank.html">Blank Page</a>
                        </li>
                    </ul>
                </li>

                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                </ul>
                </li>
            </ul>



            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">

                    <a href="#" class="margin-top-5px d-inline-block text-white margin-right-70px">
                        <img src="http://placehold.it/60x60" class="height-30px border-radius-30" alt="">
                        <?php
                        echo $_SESSION["nombres"] . " " . $_SESSION["apellidos"];
                        ?>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-fw fa-sign-out"></i>Cerrar sesión</a>
                </li>
            </ul>

        </div>
    </nav>
    <div class="content-wrapper background-light-grey">
        <div class="container-fluid">
    
    
    
            <div class="row padding-top-50px padding-bottom-150px">
    
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item "><a href="#">Ruta</a></li>
                        <li class="active">Inicio de Recorrido</li>
                    </ol>
                    <div class="padding-top-10px">
                       <?php
                       include "controlador/iniciar_rutas.php";
                       ?>
                        <form method="POST">
                        <?php
                        include "modelo/conexion.php";
                        
                        ?>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                   
                                 <select class="form-select" aria-label="Default select example" name="origenf" required class="form-control">
                                    <option value="0">Selecciona el lugar de salida</option>
                                    <?php
                                     include "modelo/conexion.php";

                                     $consulta="SELECT * FROM ruta";
                                     $ejecutar=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));


                                     ?>
                                     <?php foreach  ($ejecutar as $opciones):   ?>

                                        <option value="<?php echo $opciones['origen_ruta']?>"><?php echo $opciones['origen_ruta']?></option>
                                
                                        <?php endforeach ?>   
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select class="form-select" aria-label="Default select example" name="destinof" required class="form-control">
                                    <option value="0">Selecciona el destino del Recorrido</option>
                                    <?php
                                     include "modelo/conexion.php";

                                     $consulta="SELECT * FROM ruta";
                                     $ejecutar=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));


                                     ?>
                                     <?php foreach  ($ejecutar as $opciones):   ?>

                                        <option value="<?php echo $opciones['destino_ruta']?>"><?php echo $opciones['destino_ruta']?></option>
                                
                                        <?php endforeach ?>   
                                </select>
                            </div>
                        </div>
                       <div class="form-row">
                            <div class="form-group col-md-6">
                                <select class="form-select" aria-label="Default select example" name="placaf" class="form-control" required>
                                    <option value="0">Selecciona la placa del bus</option>
                                     <?php
                                     include "modelo/conexion.php";

                                     $consulta="SELECT * FROM buses";
                                     $ejecutar=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));


                                     ?>
                                     <?php foreach  ($ejecutar as $opciones):   ?>

                                        <option value="<?php echo $opciones['placa']?>"><?php echo $opciones['placa']?></option>
                                
                                        <?php endforeach ?>                                   
                                </select>
                            </div>
                        </div> 
                       
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <button  type="submit" class="btn btn-primary"
                                    name="btnrutas" value="ok">Iniciar
                                    ruta</a></button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>


    </div>
                                </div>
                                  
    
    
    
    
   
                            
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © busy 2022</small>
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
                    selecciona cancelar. </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="controlador/cerrar_sesion.php">salir</a>
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