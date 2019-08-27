<?php
session_start();
if (!$_SESSION['verificar']) {
    header("Location: login.php");
}
echo $_SESSION['user'];
?>

<?php include 'header.php'; ?>
    <div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BASIC TABLE -->
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="col-lg-12">
                                    <div class="col-lg-6">
                                        <h3 class="panel-title">Contenido de Inicio</h3><br>
                                    </div>
                                    <div class="col-lg-6">
                                        <a class="btn btn-info pull-right" href="#"><i class="lnr lnr-plus-circle"></i> Edita el contenido</a><br>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr style="background-color: #0d69af; color: #ffffff;">
                                        <th width="15px" class="text-center">Código</th>
                                        <th class="text-center">Contenido del  Banner</th>
                                        <th class="text-center">Imagen del banner</th>
                                        <th class="text-center" >Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    require_once "conexion/connect.php";
                                    $query = "SELECT * FROM inicio";
                                    $consulta1 = $mysqli->query($query);
                                    while ($fila = $consulta1->fetch_array(MYSQLI_ASSOC)) {
                                        echo "<tr>
                                                <td width='10px'>" . $fila['id'] . "</td>
                                                <td>" . $fila['baner'] . "</td>
                                                <td> <img style='width: 300px; height: 300px;' src='venta/".$fila['foto']."'></td>
                                                <td width='15px'><a class='btn btn-warning' href='editInicio.php?id=" . $fila['id'] . "'>
                                                <i class=\"lnr lnr-pencil\"></i></a></td>
                                                
                                            </tr>";
                                    }

                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END BASIC TABLE -->
                    </div><!-- /.row -->
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>