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

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="plugins/revslider_1/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="plugins/revslider_1/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="plugins/revslider_1/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="plugins/revslider_1/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="plugins/revslider_1/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="plugins/revslider_1/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="plugins/revslider_1/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="plugins/revslider_1/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="plugins/revslider_1/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="plugins/revslider_1/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="plugins/revslider_1/js/extensions/revolution.extension.video.min.js"></script>

</head>

<body>

    <section class="background-light-grey padding-tb-130px">
        <div class="container">
            <div class="row justify-content-md-center">

                <div class="col-lg-4">

                    <div class="text-center margin-bottom-30px">
                        <a href="01-home.html"><img src="images/logo.png" alt=""></a>
                    </div>

                    <div class="padding-30px background-white border-1 border-grey-1">
      
                        <form method="POST">
                        <?php
                            include "modelo/conexion.php";
                            include "controlador/login.php";
                            include "controlador/login_conductor.php";
                            ?>
                            
                            <div class="form-group">
                                <label for="inputEmail3" class="col-form-label"><strong>Correo electronico</strong></label>
                                <input type="email"   class="form-control rounded-0" id="inputEmail3" placeholder="Email" name="correo" required>
                            </div>
                            <div class="form-group">
                        
                                <label for="inputPassword3" class="col-form-label"><strong>Contrase??a</strong></label>
                                <input type="password" class="form-control rounded-0" id="inputPassword3" placeholder="Password" name="contrase??a"  required>
                            </div>
                            <div class="form-group ">
                                <div class="form-check">
                                    <label class="form-check-label">
                                      <input class="form-check-input" type="checkbox"> Recordar cuenta
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit"   class="btn btn-primary btn-block rounded-0 background-main-color" name="btningresar" value="INICIAR SESION" >Iniciar sesi??n como admin</button>
                            </div>
                            <div class="form-group">
                            <button type="submit"   class="btn btn-primary btn-block rounded-0 background-main-color" name="btniniciar" value="INICIAR SESION" >Iniciar sesi??n como conductor</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <!-- // row -->
        </div>
        <!-- // container -->
    </section>

    <!-- // Footer -->
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>


</body>

</html>
