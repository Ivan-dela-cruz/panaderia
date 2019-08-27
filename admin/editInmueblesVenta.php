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
                <h3 class="page-title">Producto en venta</h3>
                <div class="row">

                    <div class="col-md-12">
                        <!-- INPUT SIZING -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="">Editar registro del producto</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <?php
                                    if (isset($_GET['id'])) {

                                        require_once "conexion/connect.php";
                                        $id = $_GET['id'];

                                        $query = "SELECT * FROM producto WHERE id='$id'";
                                        $consulta1 = $mysqli->query($query);
                                        $fila = $consulta1->fetch_array(MYSQLI_ASSOC);
                                        echo '
                                              <form action="venta/editarDatos.php" enctype="multipart/form-data" method="POST">
                                                <div class="form-group col-lg-12">
                                                <input class="form-control" type="hidden" name="id" value="' . $fila['id'] . '">
                                                    <label for="" class="">Nombre</label>
                                                    <input name="nombre" class="form-control input-lg"
                                                           placeholder="agrega un nombre"
                                                           type="text" value="' . $fila['nombre'] . '">
                                                    <br>
                                                    <label for="" class="">Descripcion</label>
                                                    <input name="descripcion" class="form-control input-lg"
                                                           placeholder="agrega corta descripcion "
                                                           type="text" value="' . $fila['descripcion'] . '">
                                                    <br>
                                                </div>
        
                                                    <div class="form-group">
            
                                                        <div class="col-lg-6">
                                                            <label for="" class="">Estado</label>
                                                            <select name="estado" class="form-control input-lg" id="estados">
                                                                <option value="1">Visible</option>
                                                                <option value="0">No visible</option>
                                                            </select>
            
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="" class="">Categoría</label>
                                                            <select name="tipo" class="form-control input-lg" id="estados">
                                                                <option value="Panadería">Panadería</option>
                                                                <option value="Pasteleria">Pasteleria</option>
                                                                <option value="Postres">Postres</option>
                                                                <option value="Otros">Otros</option>
                                                            </select>
            
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="" class="">Precio</label>
                                                            <input name="precio" class="form-control input-lg"
                                                                   placeholder="agrega el costo"
                                                                   type="text" value="' . $fila['precio'] . '">
                                                            <br>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="" class="">Imagen</label>
                                                            <img width="100" height="100" src="venta/' . $fila['foto'] . '" alt="">
                                                            <input name="file1" class="input-lg" type="file" >
                                                            <br>
                                                        </div>
            
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label for="" class="">Detalles</label>
                                                        <textarea name="contenido" id="inmventa" class="form-control"
                                                                  placeholder="agrega un contenido" type="text">' . $fila['contenido'] . '</textarea>
                                                        <br>
                                                    </div>
        
                                                    <div class="col-lg-12">
                                                        <input class="btn btn-success pull-right btn-lg" type="submit"
                                                               value="Guardar">
                                                        <br>
                                                    </div>
                                                </div>
                                            </form>';
                                    }else {
                                        echo "Ocurrio un error inesperado";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- END INPUT SIZING -->
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include 'footer.php'; ?>