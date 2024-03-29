<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Panadería Tulipán | Productos </title>
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
    <link href="css/gallery.css" rel="stylesheet" type="text/css" media="all"/><!-- gallery css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

    <link href="css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- for gallery lightninBox css -->

    <link href="css/font-awesome.css" rel="stylesheet"><!-- fontawesome css -->
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
                            <li><a href="about.php">Quienes somos </a></li>

                            <li><a href="gallery.php" class="active">Productos</a></li>
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
<?php
require_once "admin/conexion/connect.php";
?>
<!-- innerpages_banner -->
<div class="innerpages_banner">
    <h2>Catálogo de nuestros productos</h2>
</div>
<!-- //innerpages_banner -->

<!-- Portfolio section -->
<section class="portfolio-agileinfo gallery" id="portfolio">
    <h3 class="heading">Productos</h3>
    <div class="container">
        <div class="gallery-grids">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist" data-aos="zoom-in">
                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab"
                                                              aria-controls="home" aria-expanded="true">Todos</a></li>
                    <li role="presentation"><a href="#teach" role="tab" id="teach-tab" data-toggle="tab"
                                               aria-controls="teach">Pastelería</a></li>
                    <li role="presentation"><a href="#train" role="tab" id="train-tab" data-toggle="tab"
                                               aria-controls="train">Postres</a></li>
                    <li role="presentation"><a href="#learn" role="tab" id="learn-tab" data-toggle="tab"
                                               aria-controls="learn">Panadería</a></li>
                    <li role="presentation"><a href="#award" role="tab" id="award-tab" data-toggle="tab"
                                               aria-controls="award">Otros</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                        <div class="tab_img">

                                <?php

                                $query2 = "SELECT * FROM producto  WHERE estado = 1";
                                $consulta12 = $mysqli->query($query2);
                                while ($fila2 = $consulta12->fetch_array(MYSQLI_ASSOC)) {
                                    echo '
                                    <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                        <a href="admin/venta/' . $fila2['foto'] . '" class="b-link-stripe b-animate-go lightninBox"
                                           data-lb-group="1">
                                            <img src="admin/venta/' . $fila2['foto'] . '" class="img-responsive" alt="Cakes"/>
                                            <div class="b-wrapper">
                                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                                                <h5>$' . $fila2['precio'] . '   ' . $fila2['nombre'] . '</h5>
                                            </div>
                                        </a>
                                     </div>
                                ';
                                };
                                ?>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="teach" aria-labelledby="teach-tab">
                        <div class="tab_img">
                            <?php

                            $query3 = "SELECT * FROM producto  WHERE estado = 1 AND tipo='Pasteleria'";
                            $consulta3 = $mysqli->query($query3);
                            while ($fila3 = $consulta3->fetch_array(MYSQLI_ASSOC)) {
                                echo '
                                    <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                        <a href="admin/venta/' . $fila3['foto'] . '" class="b-link-stripe b-animate-go lightninBox"
                                           data-lb-group="1">
                                            <img src="admin/venta/' . $fila3['foto'] . '" class="img-responsive" alt="Cakes"/>
                                            <div class="b-wrapper">
                                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                                                <h5>$' . $fila3['precio'] . '  ' . $fila3['nombre'] . '</h5>
                                            </div>
                                        </a>
                                     </div>
                                ';
                            };
                            ?>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="train" aria-labelledby="train-tab">
                        <div class="tab_img">
                            <?php

                            $query4 = "SELECT * FROM producto  WHERE estado = 1 AND tipo='Postres'";
                            $consulta4 = $mysqli->query($query4);
                            while ($fila4 = $consulta4->fetch_array(MYSQLI_ASSOC)) {
                                echo '
                                    <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                        <a href="admin/venta/' . $fila4['foto'] . '" class="b-link-stripe b-animate-go lightninBox"
                                           data-lb-group="1">
                                            <img src="admin/venta/' . $fila4['foto'] . '" class="img-responsive" alt="Cakes"/>
                                            <div class="b-wrapper">
                                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                                                <h5>$' . $fila4['precio'] . '  ' . $fila4['nombre'] . '</h5>
                                            </div>
                                        </a>
                                     </div>
                                ';
                            };
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="learn" aria-labelledby="learn-tab">
                        <div class="tab_img">
                            <?php

                            $query5 = "SELECT * FROM producto  WHERE estado = 1 AND tipo='Panadería'";
                            $consulta5 = $mysqli->query($query5);
                            while ($fila5 = $consulta5->fetch_array(MYSQLI_ASSOC)) {
                                echo '
                                    <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                        <a href="admin/venta/' . $fila5['foto'] . '" class="b-link-stripe b-animate-go lightninBox"
                                           data-lb-group="1">
                                            <img src="admin/venta/' . $fila5['foto'] . '" class="img-responsive" alt="Cakes"/>
                                            <div class="b-wrapper">
                                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                                                <h5>$' . $fila5['precio'] . ' ' . $fila5['nombre'] . '</h5>
                                            </div>
                                        </a>
                                     </div>
                                ';
                            };
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="award" aria-labelledby="award-tab">
                        <div class="tab_img">
                            <?php

                            $query6 = "SELECT * FROM producto  WHERE estado = 1 AND tipo='Otros'";
                            $consulta6 = $mysqli->query($query6);
                            while ($fila6 = $consulta6->fetch_array(MYSQLI_ASSOC)) {
                                echo '
                                    <div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
                                        <a href="admin/venta/' . $fila6['foto'] . '" class="b-link-stripe b-animate-go lightninBox"
                                           data-lb-group="1">
                                            <img src="admin/venta/' . $fila6['foto'] . '" class="img-responsive" alt="Cakes"/>
                                            <div class="b-wrapper">
                                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                                                <h5>$' . $fila6['precio'] . '  ' . $fila6['nombre'] . '</h5>
                                            </div>
                                        </a>
                                     </div>
                                ';
                            };
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Portfolio section -->

<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="w3_agile_footer_grids">
            <ul class="col-md-3 col-xs-6 w3_agile_footer_grid right">
                <h3>Opening Hours</h3>
                <li><span class="fa fa-clock-o" aria-hidden="true"></span>Monday <span>9:00 - 14:00</span></li>
                <li><span class="fa fa-clock-o" aria-hidden="true"></span>Tuesday <span>9:00 - 14:00</span></li>
                <li><span class="fa fa-clock-o" aria-hidden="true"></span>Wednesday <span>9:00 - 14:00</span></li>
                <li><span class="fa fa-clock-o" aria-hidden="true"></span>Thursday <span>9:00 - 14:00</span></li>
                <li><span class="fa fa-clock-o" aria-hidden="true"></span>Friday <span>9:00 - 14:00</span></li>
                <li><span class="fa fa-clock-o" aria-hidden="true"></span>Saturday <span>9:00 - 14:00</span></li>
                <li><span class="fa fa-clock-o" aria-hidden="true"></span>Sunday <span>Closed</span></li>
            </ul>
            <div class="col-md-3 col-xs-6 w3_agile_footer_grid">
                <h3>Navigation</h3>
                <ul class="agileits_w3layouts_footer_grid_list">
                    <li>
                        <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                        <a href="about.html">About Us</a>
                    </li>

                    <li>
                        <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                        <a href="gallery.php">Gallery</a>
                    </li>
                    <li>
                        <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                        <a href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-6 w3ls_address_mail_footer_grids w3_agile_footer_grid">
                <h3>Contact Us</h3>
                <div class="w3ls_footer_grid_left">
                    <div class="w3l-icon">
                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                    </div>
                    <p>2055 PR Cross Road,
                        <span>Kennebec SD, USA.</span>
                    </p>
                    <div class="clearfix"></div>
                </div>
                <div class="w3ls_footer_grid_left">
                    <div class="w3l-icon">
                        <span class="fa fa-phone" aria-hidden="true"></span>
                    </div>
                    <p>+(112) 455 312 671
                        <span>+(029) 664  951 859</span>
                    </p>
                    <div class="clearfix"></div>
                </div>
                <div class="w3ls_footer_grid_left">
                    <div class="w3l-icon">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                    </div>
                    <p>
                        <a href="mailto:info@example.com">mail@example1.com</a>
                        <span>
								<a href="mailto:info@example.com">mail@example2.com</a>
							</span>
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
            <p>© 2018 Bakery In. All Rights Reserved | Design by <a href="https://w3layouts.com/">W3layouts</a>
            </p>
        </div>
    </div>
</div>
<!-- //footer -->

<!-- Supportive js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //Supportive js -->
<script type="text/javascript" src="js/bootstrap.js"></script><!-- bootstrap js file -->

<!-- js for portfolio lightbox -->
<script src="js/jQuery.lightninBox.js"></script>
<script type="text/javascript">
    $(".lightninBox").lightninBox();
</script>
<!-- /js for portfolio lightbox -->

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

</body>
</html>