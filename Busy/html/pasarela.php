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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800|Poppins:300i,400,300,700,400i,500|Ubuntu:300i,400,300,700,400i,500|Raleway:400,500,600,700" rel="stylesheet">
    <!-- CSS Files -->


    <!-- Owl Carousel Assets -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/travlez-jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/sticky-sidebar.js"></script>


</head>

<body>
    <!-- Header  -->
    <header class="background-white box-shadow">
        <div class="background-main-color padding-tb-5px">
            <div class="container">
                <div class="row">
                    <div class="col-sm d-none d-sm-block text-white">Impulsando el turismo ....</div>
                    
                        <!-- // Social -->
                    
                    <div class="col-sm d-none d-sm-block">
                        <ul class="user-area list-inline float-right margin-0px text-white">
                            <li class="list-inline-item  padding-right-10px"><a href="page-login-2.php"><i class="fa fa-lock padding-right-5px"></i>login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-output">
            <div class="container header-in">
                <div class="row">
                    <div class="col-lg-3">
                        <a id="logo" href="01-home.html" class="d-inline-block margin-tb-10px"><img src="images/logo.png" alt=""></a>
                        <a class="mobile-toggle" href="#"><i class="fa fa-navicon"></i></a>
                    </div>
                    <div class="col-lg-9 position-inherit">
                        <ul id="menu-main" class="nav-menu float-right link-padding-tb-20px dropdown-dark">
                            <li class="active mega-menu mega-links mega-links-4columns"><a href="01-home.html">Inicio</a>
                                <div class="mega-menu-out sub-menu-out">
                                </div>
                            
                            </li>
                            
                            <li class="has-dropdown"><a class="dropdown" href="gallery-3-column.html">Galería</a>
                            
                            </li>

                            <li class="has-dropdown"><a href="Lista-de-municipios.html">Lista de municipios</a>
                            
                            </li>
                           
                            <li class="has-dropdown"><a href="Informacion-rutas.html">Información de transporte</a>
                               
                            </li>

                            <li class="has-dropdown"><a href="rutas-disponibles.php">Transporte</a>
            
                            </li>

                            <li class="has-dropdown"><a href="tomar-ubi/index.php">Gps</a>
                    
                            </li>
                           
                           
                            




                                        
                                    
                    
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- // Header  -->
    <!-- Page title --->
    <section class="background-grey-1 padding-tb-25px text-grey-4">
        <div class="container">
            <h6 class="font-weight-300 text-capitalize float-md-left font-2 padding-tb-10px">Ticket</h6>
            <ol class="breadcrumb z-index-2 position-relative no-background padding-tb-10px padding-lr-0px  margin-0px float-md-right">
                <li><a href="#" class="text-grey-4">Inicio</a></li>
                <li class="active">Ticket</li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- // Page title --->


    <!-- page output -->
    <div class="padding-tb-40px background-light-grey">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-9">

                    <!-- form -->
                    <div class="background-white border border-grey-1 padding-30px margin-tb-30px">
                        <h3 class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px">Datos personales</h3>
                        <div class="padding-top-10px">
                        <?php
                                    include "modelo/conexion.php";
                                    ?>
                                <form method="POST"> 
                                <?php
                                    include "controlador/registro_cliente.php";
                                    include "controlador/login.php"
                                    ?>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName">Nombres </label>
                                        <input type="text" class="form-control" name="nombres" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputName">Apellidos </label>
                                        <input type="text" class="form-control" name="apellidos"  required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email </label>
                                        <input type="email" class="form-control" name="correo"  required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputNumber">Telefono  </label>
                                        <input type="tel" class="form-control" name="telefono"  required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputText">Dirección  </label>
                                        <input type="text" class="form-control" name="direccion"  required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputText">Ciudad, Vereda, corregimiento   </label>
                                        <input type="text" class="form-control" name="ciudad"  required>
                                    </div>
                                </div>
                                <a href="index.php" class="btn-sm btn-lg  background-main-color text-white text-center font-weight-bold text-uppercase rounded-0 padding-tb-10px padding-lr-30px">Pago virtual.</a>
                                <button   type="submit" class="btn btn-primary" name="btncliente" value="ok">Pago en efectivo<a href="Recibo-ticket.php" ></a></button>
                            </form>
                        </div>
                    </div>
                    <!-- form -->


                </div>
                <!-- // col-lg-8 -->

            </div>
            <!-- // row -->
        </div>
        <!-- // container -->
    </div>
    <!-- //  page output -->


    <!-- Footer -->
    <footer class="text-center text-lg-left">
        <div class="container">
            <div class="row padding-tb-100px">
                <div class="col-lg-6 sm-mb-35px">
                    <div class="about">
                        <div class="logo margin-bottom-20px"><a href="#"><img src="images/logo.png" alt=""></a></div>
                        <p class="text-grey-2">
                            Busy es una página web para la compra de tiquetes de bus en el departamento del Quindío y para mostrar los atractivos de sus municipios.
                    </div>
                </div>

            </div>

            <div class="row padding-tb-30px border-top-1 border-grey-1">
                <div class="col-lg-4">
                    <p class="text-lg-left"><span class="text-third-color">Busy</span> | @2022</p>
                </div>
                <div class="col-lg-4 sm-mb-20px">
                    <div class="text-center"><img src="images/cards.png" alt=""></div>
                </div>
                <div class="col-lg-4">
                    <ul class="social_link list-inline text-sm-center text-lg-right">
                        <li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                    <!-- // Social -->
                </div>
            </div>

        </div>
    </footer>
    <!-- // Footer -->
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>


</body>

</html>
