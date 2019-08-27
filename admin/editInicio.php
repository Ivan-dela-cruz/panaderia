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
                                    <h3 class="panel-title">Actualizar datos del Banner Principal</h3>
                                </div>
                                <div class="panel-body">
                                    <?php
                                    if (isset($_GET['id'])) {
                                        require_once "conexion/connect.php";
                                        $id = $_GET['id'];
                                        $query = "SELECT * FROM inicio WHERE id='$id'";
                                        $consulta1 = $mysqli->query($query);
                                        $fila = $consulta1->fetch_array(MYSQLI_ASSOC);
                                        echo '<form action="pageinicio/editarDatosInicio.php" enctype="multipart/form-data" method="POST">
                                                      <div class="col-lg-9 col-lg-offset-1 col-sm-9  col-xs-12 ">
                                                            <div class="form-group-lg">
                                                                <input class="form-control" type="hidden" name="id" value="' . $fila['id'] . '">
                                                                <label>Contenido del banner</label>
                                                                 <textarea name="baner" id="inmventa" class="form-control"
                                                                            placeholder="agrega una descripción">' . $fila['baner'] . '</textarea><br>
                                                            </div>
                                                             <div class="form-group-lg">
                                                            
                                                                <label>Imagen del Banner</label>
                                                                <br>
                                                                <img style="width: 300px; height: 300px;" src="venta/' . $fila['foto'] . '" alt="">
                                                                <input class="form-control" type="file" name="file1" id="file1" value=""><br>
                                                             </div>
                                                            <div class="form-group-lg">
                                                                
                                                                <input class="btn btn-info" type="submit" value="Actualizar">
                                                            </div>
                                                        </div>
                                                </form>';
                                    } else {
                                        echo "Ocurrio un error inesperado";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>