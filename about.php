<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Panadería Tulipán | Quienes somos </title>
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
    <link href="css/about.css" rel="stylesheet" type="text/css" media="all"/><!-- about css -->
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
                            <li><a href="index.php" >Inicio</a></li>
                            <li><a href="about.php" class="active">Quienes somos </a></li>

                            <li><a href="gallery.php">Productos</a></li>
                            <li><a href="contact.php">Contactos</a></li>
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

<!-- innerpages_banner -->
<div class="innerpages_banner">
    <h2>Quienes somos</h2>
</div>
<!-- //innerpages_banner -->

<!-- about section content -->
<?php
require_once "admin/conexion/connect.php";

$query = "SELECT * FROM informacion WHERE id='1'";
$consulta1 = $mysqli->query($query);
$fila = $consulta1->fetch_array(MYSQLI_ASSOC);
?>
<?php
echo '
<div class="about_section">
    <div class="container">
        <div class="col-md-6 about-left">
            <div class="col-md-10 cakeimg cakeimg2">
                <img src="admin/informacion/' . $fila['logotipo'] . ' " alt="image"/>
            </div>
            <div class="col-md-6 cakeimg">
                <img src="images/about1.jpg" alt="image"/>
                <img src="images/about2.jpg" alt="image"/>
            </div>
            <div class="col-md-6 cakeimg cakeimg2">
                <img src="images/about3.jpg" alt="image"/>
                <img src="images/cake1.jpg" alt="image"/>
            </div>

            <div class="clearfix"></div>

        </div>
        <div class="col-md-6 about_right">
            
            <h3>' . $fila['nombre'] . '</h3>
            <br>
            <h4 class="blod">Misión</h4>
            <p>' . $fila['mision'] . '
            </p>
            <h4 class="blod">Visión</h4>
            <p>
               ' . $fila['vision'] . '

            </p>
            <h4 class="blod">Objetivos</h4>
            <p>
                ' . $fila['objetivo'] . '
            </p>
            <h4 class="blod">Valores</h4>
            <p>
                Respeto
                <br>
                Honestidad
                <br>
                Cordialidad
            </p>
        </div>
    </div>
</div>'
?>
<!-- //about section content -->

<!-- blog -->
<div style="position: relative; top: -100px;" class="blog">
    <div class="container">
        <h3 class="heading">Conoce más sobre nuestros productos</h3>
        <ul id="flexiselDemo1">

            <li>
                <div class="wthree_testimonials_grid_main">
                    <?php

                    $query3 = "SELECT * FROM producto  WHERE estado = 1 AND tipo='Pasteleria' ORDER BY 'id' DESC LIMIT 3";
                    $consulta3 = $mysqli->query($query3);
                    while ($fila3 = $consulta3->fetch_array(MYSQLI_ASSOC)) {
                        echo '
                              <div class="col-md-4 blog_grid">
                                    <a href="#">
                                                <img src="admin/venta/' . $fila3['foto'] . '" alt="blog_post1"/>
                                                <p>' . $fila3['contenido'] . '</p>
                                    </a>
                                     <a href="#" class="hvr-bounce-to-right read">' . $fila3['nombre'] . '</a>
                                            <p><span class="fa fa-heart"></span> 7 likes / <span class="fa fa-comments"></span> 15 comentarios
                                                / <a href="#">Admin</a></p>
                                            <h3><a href=#">$ <span>' . $fila3['precio'] . '</span></a></h3>
                                            <div class="clearfix"></div>
                              </div>
                        ';
                    };
                    ?>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li>
                <div class="wthree_testimonials_grid_main">
                    <?php

                    $query4 = "SELECT * FROM producto  WHERE estado = 1 AND tipo='Panadería' ORDER BY 'id' DESC LIMIT 3";
                    $consulta4 = $mysqli->query($query4);
                    while ($fila4 = $consulta4->fetch_array(MYSQLI_ASSOC)) {
                        echo '
                              <div class="col-md-4 blog_grid">
                                    <a href="#">
                                                <img src="admin/venta/' . $fila4['foto'] . '" alt="blog_post1"/>
                                                <p>' . $fila4['contenido'] . '</p>
                                    </a>
                                     <a href="#" class="hvr-bounce-to-right read">' . $fila4['nombre'] . '</a>
                                            <p><span class="fa fa-heart"></span> 7 likes / <span class="fa fa-comments"></span> 15 comentarios
                                                / <a href="#">Admin</a></p>
                                            <h3><a href=#">$ <span>' . $fila4['precio'] . '</span></a></h3>
                                            <div class="clearfix"></div>
                              </div>
                        ';
                    };
                    ?>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li>
                <div class="wthree_testimonials_grid_main">

                    <?php

                    $query5 = "SELECT * FROM producto  WHERE estado = 1 AND tipo='Otros' ORDER BY 'id' DESC LIMIT 3";
                    $consulta5 = $mysqli->query($query5);
                    while ($fila5 = $consulta5->fetch_array(MYSQLI_ASSOC)) {
                        echo '
                              <div class="col-md-4 blog_grid">
                                    <a href="#">
                                                <img src="admin/venta/' . $fila5['foto'] . '" alt="blog_post1"/>
                                                <p>' . $fila5['contenido'] . '</p>
                                    </a>
                                     <a href="#" class="hvr-bounce-to-right read">' . $fila5['nombre'] . '</a>
                                            <p><span class="fa fa-heart"></span> 7 likes / <span class="fa fa-comments"></span> 15 comentarios
                                                / <a href="#">Admin</a></p>
                                            <h3><a href=#">$ <span>' . $fila5['precio'] . '</span></a></h3>
                                            <div class="clearfix"></div>
                              </div>
                        ';
                    };
                    ?>
                    <div class="clearfix"></div>
                </div>
            </li>

        </ul>
    </div>
</div>
<!-- //blog -->

<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="w3_agile_footer_grids">
            <ul class="col-md-3 col-xs-6 w3_agile_footer_grid right">
                <h3>Horario de atención</h3>
                <li><span class="fa fa-clock-o" aria-hidden="true"></span>Lunes <span>6:30 - 21:30</span></li>
                <li><span class="fa fa-clock-o" aria-hidden="true"></span>Martes <span>6:30 - 21:30</span></li>
                <li><span class="fa fa-clock-o" aria-hidden="true"></span>Miercoles <span>6:30 - 21:30</span></li>
                <li><span class="fa fa-clock-o" aria-hidden="true"></span>Jueves <span>6:30 - 21:30</span></li>
                <li><span class="fa fa-clock-o" aria-hidden="true"></span>Viernes <span>6:30 - 21:30</span></li>
                <li><span class="fa fa-clock-o" aria-hidden="true"></span>Sábado <span>6:30 - 21:30</span></li>
                <li><span class="fa fa-clock-o" aria-hidden="true"></span>Domingo <span>8:00 - 20:00</span></li>
            </ul>
            <div class="col-md-3 col-xs-6 w3_agile_footer_grid">
                <h3>Contenido</h3>
                <ul class="agileits_w3layouts_footer_grid_list">
                    <li>
                        <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                        <a href="index.html">Inicio</a>
                    </li>
                    <li>
                        <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                        <a href="about.html">Quienes somos</a>
                    </li>
                    <li>
                        <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                        <a href="services.html">Servicios</a>
                    </li>
                    <li>
                        <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                        <a href="gallery.php">Productos</a>
                    </li>
                    <li>
                        <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                        <a href="contact.php">Contactos</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-6 w3ls_address_mail_footer_grids w3_agile_footer_grid">
                <h3>Contactos</h3>
                <div class="w3ls_footer_grid_left">
                    <div class="w3l-icon">
                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                    </div>
                    <?php
                    echo '
                    <p>
                    ' . $fila['ubicacion'] . '
                    </p>
                    ';
                    ?>
                    <div class="clearfix"></div>
                </div>
                <div class="w3ls_footer_grid_left">
                    <div class="w3l-icon">
                        <span class="fa fa-phone" aria-hidden="true"></span>
                    </div>
                    <p>(06) 295-6522

                    </p>
                    <div class="clearfix"></div>
                </div>
                <div class="w3ls_footer_grid_left">
                    <div class="w3l-icon">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                    </div>
                    <p>
                        <a href="mailto:info@example.com">m.me/tulipanibarra</a>

                    </p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 w3_agile_footer_grid">
                <h3>Instagram Posts</h3>
                <div class="w3_agileits_footer_grid_left">
                    <a href="#">
                        <img src="images/post1.jpg" alt=" " class="img-responsive"/>
                    </a>
                </div>
                <div class="w3_agileits_footer_grid_left">
                    <a href="#">
                        <img src="images/post2.jpg" alt=" " class="img-responsive"/>
                    </a>
                </div>
                <div class="w3_agileits_footer_grid_left">
                    <a href="#">
                        <img src="images/post3.jpg" alt=" " class="img-responsive"/>
                    </a>
                </div>
                <div class="w3_agileits_footer_grid_left">
                    <a href="#">
                        <img src="images/post4.jpg" alt=" " class="img-responsive"/>
                    </a>
                </div>
                <div class="w3_agileits_footer_grid_left">
                    <a href="#">
                        <img src="images/post5.jpg" alt=" " class="img-responsive"/>
                    </a>
                </div>
                <div class="w3_agileits_footer_grid_left">
                    <a href="#">
                        <img src="images/post6.jpg" alt=" " class="img-responsive"/>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="agileinfo_copyright">
            <p>© 2019 Panadería y pastelería Tulipán. All Rights Reserved | Design by <a href="https://w3layouts.com/">W3layouts</a>
            </p>
        </div>
    </div>
</div>

<!-- //footer -->

<!-- Supportive js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //Supportive js -->

<!-- Flexslider-js for-testimonials -->
<script type="text/javascript">
    $(window).load(function () {
        $("#flexiselDemo1").flexisel({
            visibleItems: 1,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 4000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 1
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 1
                }
            }
        });

    });
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!-- //Flexslider-js for-testimonials -->

<!-- smooth scrolling js -->
<script src="js/SmoothScroll.min.js"></script>
<!-- smooth scrolling js -->

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>

<!-- here starts scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- //here ends scrolling icon -->

<!-- move to top-js-files -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-- //move to top-js-files -->

<script type="text/javascript" src="js/bootstrap.js"></script><!-- bootstrap js file -->

</body>
</html>