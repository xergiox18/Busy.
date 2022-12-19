<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Busy</title>
    <meta name="author" content="Nile-Theme">
    <meta name="robots" content="index follow">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="googlebot" content="index follow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Travel, HTML5, CSS3, Hotel , Multipurpose, Template, Create a Travel website fast">
    <meta name="description" content="HTML5 Multipurpose Template, Create a website fast">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META HTTP-EQUIV="REFRESH" CONTENT="10;URL=page-site-map.php""> 
    <script src="https://cdn.jsdelivr.net/npm/ol@v7.1.0/dist/ol.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v7.1.0/ol.css">
    <script src="http://raw.githack.com/walkermatt/ol-layerswitcher/master/dist/ol-layerswitcher.js"></script>
    <link rel="stylesheet" href="http://raw.githack.com/walkermatt/ol-layerswitcher/master/dist/ol-layerswitcher.css">
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
     <!-- ======= Header  ======= -->
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

                            <li class="has-dropdown"><a href="lista_de_rutas.html">Transporte</a>
            
                            </li>

                            <li class="has-dropdown"><a href="tomar-ubi/index.php">Gps</a>
                    
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ======= end Header  ======= -->


    <!-- Page title --->
    <div id="page-title" class="text-dark background-overlay background-img-white" style="background-image: url('http://placehold.it/1600x800');">
        <div class="text-center">
            <div class="container">
                <ol class="breadcrumb z-index-2 position-relative no-background padding-30px margin-0px border-bottom-1 border-grey-1">
                    <li><a href="#" class="text-dark">Inicio</a></li>
                    <li class="active">GPS</li>
                </ol>
            </div>
                <style>
                    .map{
                        width: 800px;
                        height: 500px;
                        margin: 0 auto;
                    }
                    #ubia{
                        color: #000;
                        text-align: center;
                        padding-top: 10px;
                        margin: 0;
                    }
                </style>
            </div>
        </div>

    </div>
    <!-- Page title --->
     <!-- toma de datos de la base de datos de longitud y latitud -->
<?php

$db_host="localhost";

$db_nombre="busy";

$db_usuario="root";

$db_password="";


$conexion = mysqli_connect($db_host,$db_usuario,$db_password,$db_nombre);

$usuario = "SELECT * FROM rutas";

$resultado = mysqli_query($conexion, $usuario);

    while($row = $resultado->fetch_assoc()){

    $longitud = $row['longitud'];

    $latitud = $row['latitud'];

    }
?>

<script type="text/javascript">
    const longitud = "<?php echo $longitud ?>";
    const latitud = "<?php echo $latitud?>";
    // Justo aquí estamos pasando la variable ----^
    // Y ya la tenemos desde JavaScript. Podemos hacer cualquier cosa con ella
    
    //document.write(longitude +"," + latitude); 
</script>
<h1 id="ubia">Ubicación ruta</h1>
<br>

<div id="map" class="map" style="position:relative;"></div>

<script>
        //Aqui se encuentran todos los mapas
        var lyrGoogleSatelite = new ol.layer.Tile({
            title: 'Google Satelite',
            type: 'base', 
            visible: false,
            source: new ol.source.XYZ({
                url: "http://www.google.cn/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}"
            })
        })

        var lyrGoogle = new ol.layer.Tile({
            title: 'Google',
            type: 'base',
            visible: true,
            source: new ol.source.XYZ({
                url: "http://mt1.google.com/vt/lyrs=r&x={x}&y={y}&z={z}"
            })
        })

        var lyrOSM = new ol.layer.Tile({
            title: 'OSM',
            type: 'base',
            visible: false,
            source: new ol.source.OSM()
        })

        var map = new ol.Map({
            target:'map',
            layers:[
                //lyrOSM
                //lyrGoogleSatelite
                //lyrGoogle
            new ol.layer.Group({
                title:'Mapa base',
                layers:[
                    lyrOSM,
                    lyrGoogleSatelite,
                    lyrGoogle
                ]
            })
            ],
            view: new ol.View({
                center: ol.proj.fromLonLat([longitud, latitud]),
                zoom: 19,
                maxZoom: 19
            })
        })


        let marcador = new ol.Feature({
            geometry: new ol.geom.Point(
                ol.proj.fromLonLat([longitud, latitud])// En dónde se va a ubicar
            ),
        });
        
        // Agregamos icono
        marcador.setStyle(new ol.style.Style({
            image: new ol.style.Icon({
                src: "ubicacion.png",
                scale: 0.6
            })
        }));

        // marcadores debe ser un arreglo
        const marcadores = []; // Arreglo para que se puedan agregar otros más tarde

        marcadores.push(marcador);// Agregamos el marcador al arreglo

        let capa = new ol.layer.Vector({
            source: new ol.source.Vector({
                features: marcadores, // A la capa le ponemos los marcadores
            }),
        });

        var layerSwitcher = new ol.control.LayerSwitcher({
            tipLabel: 'Leyenda', //Label opcional para el botón
            groupSelectStyle: 'children' //           
        });
        map.addControl(layerSwitcher);
        map.addLayer(capa);
    </script>




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
    <script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>


</body>

</html>
