<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tulipan | Inicio </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="panaderia, pasteleria, tulipan, Tulipán"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/><!-- bootstrap css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

    <link href="css/font-awesome.css" rel="stylesheet"> <!-- fontawesome css -->
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese"
          rel="stylesheet">
    <!--//fonts-->


</head>
<body>

<!-- header -->
<div class="header" id="home">
    <div class="content white">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.php">
                        <div class="col-lg-12">
                            <div class="col-lg-6">

                            </div>
                            <div class="col-lg-6">
                                <img class="img-logo" src="images/logot.png" alt="">
                            </div>

                        </div>

                    </a>
                </div>
                <!--/.navbar-header-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <nav>
                        <ul class="nav navbar-nav">
                            <li><a href="index.php" class="active">Inicio</a></li>
                            <li><a href="about.php">Quienes somos </a></li>

                            <li><a href="gallery.html">Productos</a></li>
                            <li><a href="contact.html">Contactos</a></li>
                        </ul>
                    </nav>
                </div>
                <!--/.navbar-collapse-->
                <!--/.navbar-->
            </div>
        </nav>
    </div>
</div>
<!-- //header -->


<?php
require_once "admin/conexion/connect.php";

$query = "SELECT * FROM informacion WHERE id='1'";
$consulta1 = $mysqli->query($query);
$fila = $consulta1->fetch_array(MYSQLI_ASSOC);
?>
<?php

$querybaner1 = "SELECT * FROM inicio WHERE id='1' ";
$consultabb = $mysqli->query($querybaner1);
$banner1 = $consultabb->fetch_array(MYSQLI_ASSOC);

$querybaner1 = "SELECT * FROM inicio WHERE id='2' ";
$consultabb = $mysqli->query($querybaner1);
$banner2 = $consultabb->fetch_array(MYSQLI_ASSOC);

$querybaner1 = "SELECT * FROM inicio WHERE id='3' ";
$consultabb = $mysqli->query($querybaner1);
$banner3 = $consultabb->fetch_array(MYSQLI_ASSOC);
$querybaner1 = "SELECT * FROM inicio WHERE id='4' ";
$consultabb = $mysqli->query($querybaner1);
$banner4 = $consultabb->fetch_array(MYSQLI_ASSOC);
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <?php
                echo '
                <div class="carousel-caption">
                    <div class="col-md-6 slider_left">
                    <h4>
                        ' . $banner1['baner'] . '
                        </h4>
                    </div>
                    <div class="col-md-6 slider_right">
                        <img src="admin/informacion/' . $banner1['foto'] . ' " alt="cake1"/>
                    </div>
                    <div class="clearfix"></div>
                </div>
                ';
                ?>
            </div>
        </div>
        <div class="item item2">
            <div class="container">
                <?php
                echo '
                <div class="carousel-caption">
                    <div class="col-md-6 slider_left">
                    <h4>
                        ' . $banner2['baner'] . '
                        </h4>
                    </div>
                    <div class="col-md-6 slider_right">
                        <img src="admin/informacion/' . $banner2['foto'] . ' " alt="cake1"/>
                    </div>
                    <div class="clearfix"></div>
                </div>
                ';
                ?>
            </div>
        </div>
        <div class="item item3">
            <div class="container">
                <?php
                echo '
                <div class="carousel-caption">
                    <div class="col-md-6 slider_left">
                    <h4>
                        ' . $banner3['baner'] . '
                        </h4>
                    </div>
                    <div class="col-md-6 slider_right">
                        <img src="admin/informacion/' . $banner3['foto'] . ' " alt="cake1"/>
                    </div>
                    <div class="clearfix"></div>
                </div>
                ';
                ?>
            </div>
        </div>
        <div class="item item4">
            <div class="container">
                <?php
                echo '
                <div class="carousel-caption">
                    <div class="col-md-6 slider_left">
                    <h4>
                        ' . $banner4['baner'] . '
                        </h4>
                    </div>
                    <div class="col-md-6 slider_right">
                        <img src="admin/informacion/' . $banner4['foto'] . ' " alt="cake1"/>
                    </div>
                    <div class="clearfix"></div>
                </div>
                ';
                ?>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="fa fa-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Atras</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="fa fa-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
    <!-- The Modal -->
</div>
<!-- //banner slider -->


<!-- ****** Welcome Area End ****** -->

<!-- welcome -->
<div class="welcome">
    <div class="container">
        <?php
        echo '
        <div class="col-md-6 welcome-w3lright">
            <div class="video-grid-single-page-agileits">
                <img style="width: 800px; height: 410px;" src="admin/informacion/' . $fila['logotipo'] . ' " alt="" class="img-responsive"/>

            </div>
        </div>
        
        <div class="col-md-6 welcome_left">
            <h3 class="agileits-title">Bienvenidos</h3>
            <h4>' . $fila['nombre'] . '</h4>
            <p>
            ' . $fila['contenido'] . '
            </p>
        </div>'
        ?>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //welcome -->

<!-- /about -->
<div class="about">
    <div class="container">
        <div class="wthree_head_section">
            <h3 class="heading">Conozca Más Sobre Nuestra Panadería</h3>
        </div>
        <div class="agile_wthree_inner_grids">
            <div class="col-md-6 about_agileinfo">
                <h4>Pastelería</h4>
                <p>En esta ocasión hicimos una torta hermosa por fuera y deliciosa por dentro. Esta vez tiene un poncake
                    de naranja y un relleno de frutos rojos que crean una exótica combinación al probarla. ¡Gracias por
                    preferirnos!.</p>
                <div class="mid-inner-info">
                    <div class="col-md-6 mid-inner-sec one">
                        <span class="fa fa-birthday-cake" aria-hidden="true"></span>
                        <h5>Tortas perzonalizadas</h5>
                        <p>Diseñamos su torta como usted lo desee.</p>

                    </div>
                    <div class="col-md-6 mid-inner-sec">
                        <span class="fa fa-cutlery" aria-hidden="true"></span>
                        <h5>Postres</h5>
                        <p>Ofrecemos una gran variedad de postres para el deleite de su paladar.</p>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 about_agileinfo">
                <div class="mid-inner-info">
                    <div class="col-md-6 mid-inner-sec one">
                        <span class="fa fa-birthday-cake" aria-hidden="true"></span>
                        <h5>Pasteles horneados</h5>
                        <p>Ideales para celebrar los cumpleaños de nuestos seres queridos.</p>

                    </div>
                    <div class="col-md-6 mid-inner-sec">
                        <span class="fa fa-spoon" aria-hidden="true"></span>
                        <h5>Tortas frescas</h5>
                        <p>Todos nuestros productos son elaborados con los ingredientes de más alta calidad.</p>

                    </div>
                    <div class="clearfix"></div>
                    <h4>Variedad</h4>
                    <p>Ofrecemos una gran variedad en productos, como el pan, empanadas, bizcochos, bebida, capuchinos,
                        etc.</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//about -->

<!-- Popular cakes -->
<div class="popular_cakes">
    <div class="container">
        <h3 class="heading">Nuestros productos mas populares</h3>
        <div class="cakes_grids">
            <div class="col-md-4">
                <div class="cakes_grid1">
                    <img src="images/productos/batman.jpg" alt="popular cakes"/>
                    <h3>Tortas perzonalizadas </h3>
                    <p>Ideales para los niños</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cakes_grid1">
                    <img src="images/productos/15anios.jpg" alt="popular cakes"/>
                    <h3>Patelería para eventos</h3>
                    <p>Ideales para toda clase de eventos</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cakes_grid1">
                    <img src="images/productos/blancaverde.jpg" alt="popular cakes"/>
                    <h3>Decorados de pastelería</h3>
                    <p>Diseños de acorde las necesidadesdel cliente</p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="cakes_bottom_grids">
                <div class="col-md-4">
                    <div class="cakes_grid1">
                        <img src="images/productos/cumpleninia.jpg" alt="popular cakes"/>
                        <h3>Dedicatorias</h3>
                        <p>Demuestra tu cariño a tus seres queridos</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cakes_grid1">
                        <img src="images/productos/postres.jpg" alt="popular cakes"/>
                        <h3>Postre de naranja</h3>
                        <p>Ofrecemos una gran variedad</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cakes_grid1">
                        <img src="images/productos/gente.jpg" alt="popular cakes"/>
                        <h3>Excelente atención</h3>
                        <p>Birindamos una atención oprtuna</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- //Popular cakes -->
<?php include 'footer.php'; ?>