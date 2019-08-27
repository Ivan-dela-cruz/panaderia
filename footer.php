<?php
require_once "admin/conexion/connect.php";

$query = "SELECT * FROM informacion WHERE id='1'";
$consulta1 = $mysqli->query($query);
$fila = $consulta1->fetch_array(MYSQLI_ASSOC);
?>
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

<!-- banner bottom video script -->
<script src="js/simplePlayer.js"></script>
<script>
    $("document").ready(function () {
        $("#video").simplePlayer();
    });
</script>
<!-- //banner bottom video script -->

<!-- testimonials plugin script -->
<script src="js/jquery.wmuSlider.js"></script>
<script>
    $('.example1').wmuSlider();
</script>
<!-- testimonials plugin script -->

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