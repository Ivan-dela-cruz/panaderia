<?php include 'header.php'; ?>

    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <h3 class="page-title">Detalle de producto en venta</h3>
                <div class="row">
                    <?php
                    require_once "conexion/connect.php";
                    $id = $_GET['id'];
                    $query = "SELECT * FROM producto WHERE id='$id'";
                    $consulta1 = $mysqli->query($query);
                    while ($fila = $consulta1->fetch_array(MYSQLI_ASSOC)) {
                        echo '
                    <div class="col-md-12">
                        <h2>' . $fila['nombre'] . '</h2>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="property-images">
                                    <!-- Slider Starts -->
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators hidden-xs">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                                            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                                            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <!-- Item 1 -->
                                            <div class="item active">
                                                <img src="venta/' . $fila['foto'] . '" class="properties" alt="properties"/>
                                            </div>
                                            <!-- #Item 1 -->
                                        </div>
                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span
                                                    class="glyphicon glyphicon-chevron-left"></span></a>
                                        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span
                                                    class="glyphicon glyphicon-chevron-right"></span></a>
                                    </div>
                                    <!-- #Slider Ends -->

                                </div>

                                 <div class="spacer"><h4><span class="glyphicon glyphicon-info-sign"></span> Descripcion</h4>
                                    ' . $fila['descripcion'] . '
                                </div>
                                <div class="spacer"><h4><span class="glyphicon glyphicon-book"></span> Detalles del producto</h4>
                                    ' . $fila['contenido'] . '
                                </div>
                                
                            </div>
                            <div class="col-lg-4">
                                <div class="col-lg-12  col-sm-6">
                                    <h4><span class="glyphicon glyphicon-user"></span> Estado & Precio & tipo</h4>
                                    <div class="listing-detail">
                                        <div class="table-responsive">
                                            <table class="table text-center table-responsive table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th> Estado </th>
                                                        <th> Precio </th>
                                                        <th> Tipo </th>
                                                    </tr>
                                                    
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>' . $fila['estado'] . '</td>
                                                        <td>' . $fila['precio'] . '</td>
                                                        <td>' . $fila['tipo'] . '</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br>
                                    </div>

                                    <h4><span class="glyphicon glyphicon-home"></span> Aciones</h4>
                                    <div class="listing-detail">
                                        <br>
                                        <div class="property-info">
                                            
                                                <a class="btn btn-primary" href="editInmueblesVenta.php?id=' . $fila['id'] . '">Editar</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>


<?php include 'footer.php'; ?>