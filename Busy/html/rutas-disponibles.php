

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

                            <li class="has-dropdown"><a href="page-site-map.php">Gps</a>
                    
                            </li>
                           
                           
                            




                                        
                                    
                    
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ======= end Header  ======= -->
    <!-- lista de rutas --->
    <section class="background-grey-1 padding-tb-25px text-grey-4">
        <div class="container">
            <h6 class="font-weight-300 text-capitalize float-md-left font-2 padding-tb-10px">Lista de rutas</h6>
            <ol class="breadcrumb z-index-2 position-relative no-background padding-tb-10px padding-lr-0px  margin-0px float-md-right">
                <li><a href="#" class="text-grey-4">Inicio</a></li>
                <li class="active">Lista de rutas</li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </section>

    <!-- page output -->
    <div class="padding-tb-40px background-light-grey">
        <div class="container">
        <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-3 sticky-sidebar">
                    <!-- Hotels Search -->
                    <div class="widget">
                        <h4 class="widget-title clearfix"><span>Busqueda de transporte</span></h4>
                        <div class="search-filter">
                            <div class="form-group margin-bottom-5px">
                                <label>Destino</label>
                                <div class="destination"><input type="text" class="input-text full-width" placeholder="Introduce un destino"></div>>
                            </div>
                            <div class="form-group margin-bottom-5px">
                                <label>Fecha de salida</label>
                                <div class="date-input"><input type="text" class="input-text datepicker full-width hasDatepicker" placeholder="15 / 5 / 2017" id="dp1511378113210"></div>
                            </div>
                            <div class="form-group margin-bottom-5px">
                                <label>Fecha de llegada</label>
                                <div class="date-input"><input type="text" class="input-text datepicker full-width hasDatepicker" placeholder="15 / 5 / 2017" id="dp1511378113211"></div>
                            </div>
                            <div class="row margin-bottom-10px">
                                <div class="form-group col">
                                    <label>Cupos</label>
                                    <div class="rooms"><input type="text" class="input-text full-width" placeholder="1"></div>
                                </div>
                            </div>
                            <a href="#" class="btn-sm btn-lg btn-block background-main-color text-white text-center text-uppercase font-weight-600"><i class="fa fa-search"></i> Buscar transporte</a>
                        </div>
                    </div>
                    <!-- //  Hotels Search -->
                </div>

                <!-- Content -->
                <div class="col-lg-9">

                    <!-- flight post -->

                    <?php

include "modelo/conexion.php";
$sql = $conexion->query(" select * from ruta ");
while ($row = $sql->fetch_assoc()) {  ?>  <div class="flight-post background-white border-bottom-1 border-grey-1 with-hover box-shadow-hover margin-bottom-40px">
    <div class="row no-gutters">
        <div class="col-lg-4">
            <div class="hotel-img position-relative">
            <img src="data:image;base64,<?php echo base64_encode($row['img']);  ?>" >
                <div class="hover-option background-main-color opacity-6">
                    <h3 class="text-center text-white padding-top-n-25 "></h3>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="padding-20px">
                <h3 class="text-uppercase text-medium font-weight-600"><a href="#" class="text-dark"><span class="margin-right-30px"> <?php echo $row ['origen_ruta'] ?></span>Destino: <?php echo $row ['destino_ruta'] ?> </a></h3>
                <a href="index.php" class="float-lg-right btn-sm btn-lg background-grey-1 text-grey-2 text-center text-uppercase pull-top-30px">Comprar </a>
                
                <small class="text-uppercase text-extra-small margin-right-30px">
                        <a href="#" class="text-grey-4"><i class="fa fa-chevron-up margin-right-5px"></i>
                        Horarios disponibles:  <span class="text-third-color margin-right-5px"> <?php echo $row ['horarios_ruta'] ?></span> </a>
                    </small>
                    <br>
                    <small class="text-uppercase text-extra-small margin-right-30px">
                        <a href="#" class="text-grey-4"><i class="fa fa-chevron-up margin-right-5px"></i>
                        Intervalos de ruta<span class="text-third-color margin-right-5px"> <?php echo $row ['intervalo_ruta'] ?></span> </a>
                    </small>
                <div class="claerfix"></div>
                <div class="margin-top-8px padding-top-8px text-uppercase text-extra-small border-top-1 border-grey-1">
                    <strong class="text-medium text-third-color padding-right-5px font-weight-bold">Precio $ <?php echo $row ['precio_ruta'] ?></strong>
                    <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="margin-right-40px">Rapido Quíndio</span></i>
                </div>
            </div>
        </div>
    </div>
</div>       

<br>

<?php }?>
                   
                    <!-- // flight post -->

                    <ul class="pagination pagination-md ">
                        <li class="page-item disabled"><a class="page-link rounded-0" href="#" tabindex="-1">Anterior</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link rounded-0" href="#">Siguiente</a></li>
                    </ul>
                </div>
                <!-- //  Content -->

            </div>
            <!--// row -->

        </div>
    </div>

    <!-- ======= footer  ======= -->
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
    <!-- ======= end footer  ======= -->
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>


</body>

</html>
