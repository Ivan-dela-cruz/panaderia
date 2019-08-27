<?php
require_once "../conexion/connect.php";
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$contenido = $_POST['contenido'];
$tipo = $_POST['tipo'];
$precio = $_POST['precio'];
$estado = $_POST['estado'];

if ($_FILES["file1"]["error"] > 0) {
}else {

    $nom_archivo = $_FILES['file1']['name']; // Para conocer el nombre del archivo
    $ruta = "../images/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
    $archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
    $subir = move_uploaded_file($archivo, $ruta); //se sube el archivo

    // $sentencia_img = "UPDATE informacion SET logotipo='$ruta' WHERE id='1' ";
    $query = "INSERT INTO producto(nombre,descripcion,contenido,tipo,precio,estado,foto) VALUES('$nombre','$descripcion','$contenido','$tipo','$precio','$estado','$ruta')";
    if ($mysqli->query($query)) {
        header("Location: ../ventas.php");
    } else {
        echo "<br>Ocurrio un error";
        echo $query;
        echo "<br>" . mysqli_error($mysqli);
        //$mysqli->query($query) or die ("Error al actualizar datos" . mysqli_error($mysqli));
    }
}
    //header("Location: ../showUser.php");

