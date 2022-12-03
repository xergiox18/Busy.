

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

                            <li class="has-dropdown"><a href="rutas-disponibles.php">Tiquetes</a>
            
                            </li>

                            <li class="has-dropdown"><a href="page-site-map.html">Gps</a>
                    
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
                <li><a href="#" class="text-grey-4">pages</a></li>
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
                        <h4 class="widget-title clearfix"><span>Buscar rutas</span></h4>
                        <div class="search-filter">
                            <div class="form-group margin-bottom-5px">
                                <label>Desde</label>
                                <div class="destination"><input type="text" class="input-text full-width" placeholder="Armenia"></div>
                            </div>
                            <div class="form-group margin-bottom-5px">
                                <label>Hacia</label>
                                <div class="destination"><input type="text" class="input-text full-width" placeholder="Su destino"></div>
                            </div>
                            <div class="form-group margin-bottom-5px">
                                <label>Hora de salida</label>
                                <div class="date-input"><input type="text" class="input-text datepicker full-width hasDatepicker" placeholder="15 / 5 / 2017"></div>
                            </div>
                           <!--
                            <div class="form-group margin-bottom-5px">
                                <label></label>
                                <div class="date-input"><input type="text" class="input-text datepicker full-width hasDatepicker" placeholder="15 / 5 / 2017"></div>
                            </div>-->
                            <a href="#" class="btn-sm btn-lg btn-block background-main-color text-white text-center text-uppercase font-weight-600"><i class="fa fa-search"></i> Buscar</a>
                        </div>
                    </div>


                </div>
                <!-- //  Sidebar -->

                <!-- Content -->
                <div class="col-lg-9">

                    <!-- flight post -->

                    <?php

include "modelo/conexion.php";
$sql = $conexion->query(" select * from ruta ");
while ($datos = $sql->fetch_object()) {  ?>  <div class="flight-post background-white border-bottom-1 border-grey-1 with-hover box-shadow-hover margin-bottom-40px">
    <div class="row no-gutters">
        <div class="col-lg-4">
            <div class="hotel-img position-relative">
                <img src="https://live.staticflickr.com/2559/4076835274_77bb5e1c5e_b.jpg" alt="">
                <div class="hover-option background-main-color opacity-6">
                    <h3 class="text-center text-white padding-top-n-25 "></h3>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="padding-20px">
                <h3 class="text-uppercase text-medium font-weight-600"><a href="#" class="text-dark"><span class="margin-right-30px"><?=$datos->origen_ruta?></span>Hacia: <?=$datos->destino_ruta?> </a></h3>
                <a href="index.php" class="float-lg-right btn-sm btn-lg background-grey-1 text-grey-2 text-center text-uppercase pull-top-30px">Comprar </a>
                
                <small class="text-uppercase text-extra-small margin-right-30px">
                        <a href="#" class="text-grey-4"><i class="fa fa-chevron-up margin-right-5px"></i>
                        Hora de salida :  <span class="text-third-color margin-right-5px"><?=$datos->horarios_ruta?></span> </a>
                    </small>
                    <button id="BotonSuma" class="plus" style="padding: 0; border: none; background: none; cursor: pointer; transition: all .5s;"><a href="mete_producto.php?id=12&nombre=tebaida&precio=4800" class="btn btn-" ><i class="fa fa-wifi icon-round-ba background-pink"></i></button></a>
                <div class="claerfix"></div>
                <div class="margin-top-8px padding-top-8px text-uppercase text-extra-small border-top-1 border-grey-1">
                    <strong class="text-medium text-third-color padding-right-5px font-weight-bold">$<?=$datos->precio_ruta?></strong>
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
                        <li class="page-item disabled"><a class="page-link rounded-0" href="#" tabindex="-1">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link rounded-0" href="#">Next</a></li>
                    </ul>
                </div>
                <!-- //  Content -->

            </div>
            <!--// row -->

        </div>
    </div>
    <!-- //  page output -->


    <div id="instgram-feed">
        <ul class="instagram-feed">
            <li><a href="#"><img src="http://placehold.it/400x400" alt=""></a></li>
            <li><a href="#"><img src="http://placehold.it/400x400" alt=""></a></li>
            <li><a href="#"><img src="http://placehold.it/400x400" alt=""></a></li>
            <li><a href="#"><img src="http://placehold.it/400x400" alt=""></a></li>
            <li><a href="#"><img src="http://placehold.it/400x400" alt=""></a></li>
            <li><a href="#"><img src="http://placehold.it/400x400" alt=""></a></li>
            <li><a href="#"><img src="http://placehold.it/400x400" alt=""></a></li>
            <li><a href="#"><img src="http://placehold.it/400x400" alt=""></a></li>
            <li><a href="#"><img src="http://placehold.it/400x400" alt=""></a></li>
            <li><a href="#"><img src="http://placehold.it/400x400" alt=""></a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <!-- // Instgram Feed -->


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row padding-tb-100px">
                <div class="col-lg-6">
                    <div class="about">
                        <div class="logo margin-bottom-20px"><a href="#"><img src="images/logo.png" alt=""></a></div>
                        <p class="text-grey-2">
                            Mauris fermentum porta sem, non hendrerit enim bibendum consectetur. Fusce diam est, porttitor vehicula gravida at, accumsan bibendum tincidunt imperdiet. Maecenas quis magna faucibus, varius ante sit amet, varius augue. Praesent aliquam, a imperdiet lacus libero ac tellus. Nunc fringilla ullamcorper quam at lacinia.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <ul class="footer-menu row margin-0px padding-0px list-unstyled">
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Home</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Featured</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Feedback</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Ask a Question</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Team</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Maintenance</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Get a Quote</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Contact Us</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Alerts messages</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <ul class="images-feed row no-gutters margin-0px padding-0px list-unstyled">
                        <li class="col-lg-4 col-md-4 padding-tb-5px"><a href="#" class="padding-lr-5px d-block"><img src="http://placehold.it/400x400" alt=""></a></li>
                        <li class="col-lg-4 col-md-4 padding-tb-5px"><a href="#" class="padding-lr-5px d-block"><img src="http://placehold.it/400x400" alt=""></a></li>
                        <li class="col-lg-4 col-md-4 padding-tb-5px"><a href="#" class="padding-lr-5px d-block"><img src="http://placehold.it/400x400" alt=""></a></li>
                        <li class="col-lg-4 col-md-4 padding-tb-5px"><a href="#" class="padding-lr-5px d-block"><img src="http://placehold.it/400x400" alt=""></a></li>
                        <li class="col-lg-4 col-md-4 padding-tb-5px"><a href="#" class="padding-lr-5px d-block"><img src="http://placehold.it/400x400" alt=""></a></li>
                        <li class="col-lg-4 col-md-4 padding-tb-5px"><a href="#" class="padding-lr-5px d-block"><img src="http://placehold.it/400x400" alt=""></a></li>
                    </ul>
                </div>
            </div>

            <div class="row padding-tb-30px border-top-1 border-grey-1">
                <div class="col-lg-4">
                    <p class="text-sm-center text-lg-left"><span class="text-third-color">Travelz</span> | @2017 All copy rights reserved</p>
                </div>
                <div class="col-lg-4 sm-mb-20px">
                    <div class="text-center"><img src="images/cards.png" alt=""></div>
                </div>
                <div class="col-lg-4">
                    <ul class="social_link list-inline text-sm-center text-lg-right">
                        <li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="rss" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
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
