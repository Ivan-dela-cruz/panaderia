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
                    <div class="col-md-4 blog_grid">
                        <a href="single.html">
                            <img src="images/about1.jpg" alt="blog_post1"/>
                            <p>Fusce congue magna ac nisl molestie, necelem entum odiovarius. Nulla consequat odio inri
                                sus efficitur tincidunt. Vestibulum sed.</p>
                        </a>
                        <a href="single.html" class="hvr-bounce-to-right read">Read More</a>
                        <p><span class="fa fa-heart"></span> 7 likes / <span class="fa fa-comments"></span> 15 comments
                            / <a href="#">Admin</a></p>
                        <h3><a href="single.html">27 <span>Dec</span></a></h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 blog_grid">
                        <a href="single.html">
                            <img src="images/about2.jpg" alt="blog_post1"/>
                            <p>Fusce congue magna ac nisl molestie, necelem entum odiovarius. Nulla consequat odio inri
                                sus efficitur tincidunt. Vestibulum sed.</p>
                        </a>
                        <a href="single.html" class="hvr-bounce-to-right read">Read More</a>
                        <p><span class="fa fa-heart"></span> 7 likes / <span class="fa fa-comments"></span> 15 comments
                            / <a href="#">Admin</a></p>
                        <h3><a href="single.html">27 <span>Dec</span></a></h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 blog_grid">
                        <a href="single.html">
                            <img src="images/cake1.jpg" alt="blog_post1"/>
                            <p>Fusce congue magna ac nisl molestie, necelem entum odiovarius. Nulla consequat odio inri
                                sus efficitur tincidunt. Vestibulum sed.</p>
                        </a>
                        <a href="single.html" class="hvr-bounce-to-right read">Read More</a>
                        <p><span class="fa fa-heart"></span> 7 likes / <span class="fa fa-comments"></span> 15 comments
                            / <a href="#">Admin</a></p>
                        <h3><a href="single.html">27 <span>Dec</span></a></h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li>
                <div class="wthree_testimonials_grid_main">
                    <div class="col-md-4 blog_grid">
                        <a href="single.html">
                            <img src="images/about3.jpg" alt="blog_post1"/>
                            <p>Fusce congue magna ac nisl molestie, necelem entum odiovarius. Nulla consequat odio inri
                                sus efficitur tincidunt. Vestibulum sed.</p>
                        </a>
                        <a href="single.html" class="hvr-bounce-to-right read">Read More</a>
                        <p><span class="fa fa-heart"></span> 7 likes / <span class="fa fa-comments"></span> 15 comments
                            / <a href="#">Admin</a></p>
                        <h3><a href="single.html">27 <span>Dec</span></a></h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 blog_grid">
                        <a href="single.html">
                            <img src="images/about1.jpg" alt="blog_post1"/>
                            <p>Fusce congue magna ac nisl molestie, necelem entum odiovarius. Nulla consequat odio inri
                                sus efficitur tincidunt. Vestibulum sed.</p>
                        </a>
                        <a href="single.html" class="hvr-bounce-to-right read">Read More</a>
                        <p><span class="fa fa-heart"></span> 7 likes / <span class="fa fa-comments"></span> 15 comments
                            / <a href="#">Admin</a></p>
                        <h3><a href="single.html">27 <span>Dec</span></a></h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 blog_grid">
                        <a href="single.html">
                            <img src="images/cake1.jpg" alt="blog_post1"/>
                            <p>Fusce congue magna ac nisl molestie, necelem entum odiovarius. Nulla consequat odio inri
                                sus efficitur tincidunt. Vestibulum sed.</p>
                        </a>
                        <a href="single.html" class="hvr-bounce-to-right read">Read More</a>
                        <p><span class="fa fa-heart"></span> 7 likes / <span class="fa fa-comments"></span> 15 comments
                            / <a href="#">Admin</a></p>
                        <h3><a href="single.html">27 <span>Dec</span></a></h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li>
                <div class="wthree_testimonials_grid_main">
                    <div class="col-md-4 blog_grid">
                        <a href="single.html">
                            <img src="images/about3.jpg" alt="blog_post1"/>
                            <p>Fusce congue magna ac nisl molestie, necelem entum odiovarius. Nulla consequat odio inri
                                sus efficitur tincidunt. Vestibulum sed.</p>
                        </a>
                        <a href="single.html" class="hvr-bounce-to-right read">Read More</a>
                        <p><span class="fa fa-heart"></span> 7 likes / <span class="fa fa-comments"></span> 15 comments
                            / <a href="#">Admin</a></p>
                        <h3><a href="single.html">27 <span>Dec</span></a></h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 blog_grid">
                        <a href="single.html">
                            <img src="images/about1.jpg" alt="blog_post1"/>
                            <p>Fusce congue magna ac nisl molestie, necelem entum odiovarius. Nulla consequat odio inri
                                sus efficitur tincidunt. Vestibulum sed.</p>
                        </a>
                        <a href="single.html" class="hvr-bounce-to-right read">Read More</a>
                        <p><span class="fa fa-heart"></span> 7 likes / <span class="fa fa-comments"></span> 15 comments
                            / <a href="#">Admin</a></p>
                        <h3><a href="single.html">27 <span>Dec</span></a></h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 blog_grid">
                        <a href="single.html">
                            <img src="images/cake1.jpg" alt="blog_post1"/>
                            <p>Fusce congue magna ac nisl molestie, necelem entum odiovarius. Nulla consequat odio inri
                                sus efficitur tincidunt. Vestibulum sed.</p>
                        </a>
                        <a href="single.html" class="hvr-bounce-to-right read">Read More</a>
                        <p><span class="fa fa-heart"></span> 7 likes / <span class="fa fa-comments"></span> 15 comments
                            / <a href="#">Admin</a></p>
                        <h3><a href="single.html">27 <span>Dec</span></a></h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li>
                <div class="wthree_testimonials_grid_main">
                    <div class="col-md-4 blog_grid">
                        <a href="single.html">
                            <img src="images/about3.jpg" alt="blog_post1"/>
                            <p>Fusce congue magna ac nisl molestie, necelem entum odiovarius. Nulla consequat odio inri
                                sus efficitur tincidunt. Vestibulum sed.</p>
                        </a>
                        <a href="single.html" class="hvr-bounce-to-right read">Read More</a>
                        <p><span class="fa fa-heart"></span> 7 likes / <span class="fa fa-comments"></span> 15 comments
                            / <a href="#">Admin</a></p>
                        <h3><a href="single.html">27 <span>Dec</span></a></h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 blog_grid">
                        <a href="single.html">
                            <img src="images/about1.jpg" alt="blog_post1"/>
                            <p>Fusce congue magna ac nisl molestie, necelem entum odiovarius. Nulla consequat odio inri
                                sus efficitur tincidunt. Vestibulum sed.</p>
                        </a>
                        <a href="single.html" class="hvr-bounce-to-right read">Read More</a>
                        <p><span class="fa fa-heart"></span> 7 likes / <span class="fa fa-comments"></span> 15 comments
                            / <a href="#">Admin</a></p>
                        <h3><a href="single.html">27 <span>Dec</span></a></h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 blog_grid">
                        <a href="single.html">
                            <img src="images/cake1.jpg" alt="blog_post1"/>
                            <p>Fusce congue magna ac nisl molestie, necelem entum odiovarius. Nulla consequat odio inri
                                sus efficitur tincidunt. Vestibulum sed.</p>
                        </a>
                        <h3><a href="single.html">$ <span>25</span></a></h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- //blog -->

<?php include 'footer.php'; ?>