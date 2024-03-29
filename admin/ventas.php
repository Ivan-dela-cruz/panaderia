<?php include 'header.php'; ?>
    <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- RECENT PURCHASES -->
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="col-lg-12">
                                    <div class="col-lg-6">
                                        <h3 class="panel-title">Lista de productos</h3><br>
                                    </div>
                                    <div class="col-lg-6">
                                        <a class="btn btn-success pull-right" href="registroInmueblesVenta.php"><i class="lnr lnr-plus-circle"></i> Crear nuevo</a><br>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table text-center table-responsive">
                                    <thead>
                                    <tr style="background-color: #0d69af; color: #ffffff;" class="text-center">
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Nombre</th>
                                        <th width="120px" class="text-center">Imagen</th>
                                        <th class="text-center">Precio</th>
                                        <th class="text-center">Tipo</th>
                                        <th class="text-center">Estado</th>
                                        <th colspan="3" class="text-center">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    require_once "conexion/connect.php";
                                    $query2 = "SELECT * FROM producto";
                                    $consulta12 = $mysqli->query($query2);
                                    while ($fila2 = $consulta12->fetch_array(MYSQLI_ASSOC)) {
                                        echo '
                                    <tr>
                                        <td>' . $fila2['id'] . '</td>
                                        <td>' . $fila2['nombre'] . '</td>
                                        <td><img width="100" height="100" src="venta/' . $fila2['foto'] . '" alt=""></td>
                                        <td>' . $fila2['precio'] . '</td>
                                        <td>' . $fila2['tipo'] . '</td>
                                        <td>' . $fila2['estado'] . '</td>
                                        <td width="15px"><a class="btn btn-primary" href="showInmueblesVenta.php?id=' . $fila2['id'] . '">
                                                <i class="lnr lnr-screen"></i></a></td>
                                        <td width="10px"><a class="btn btn-warning" href="editInmueblesVenta.php?id=' . $fila2['id'] . '">
                                                <i class="lnr lnr-pencil"></i></a></td>
                                        <td width="10px"><a class="btn btn-danger" href="venta/eliminar.php?id=' . $fila2['id'] . '">
                                                <i class="lnr lnr-trash"></i></a></td>
                                        
                                    </tr>';
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-6"><span class="panel-note"><i
                                                    class="fa fa-clock-o"></i> Hoy</span>
                                    </div>
                                    <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">Ver todo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END RECENT PURCHASES -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
<?php include 'footer.php'; ?>