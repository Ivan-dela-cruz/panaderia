<?php
require_once "../conexion/connect.php";
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$contenido = $_POST['contenido'];
$tipo = $_POST['tipo'];
$precio = $_POST['precio'];
$estado = $_POST['estado'];

$campos = "nombre='$nombre',descripcion='$descripcion',contenido='$contenido',precio='$precio',tipo='$tipo',estado='$estado'";

$query = "UPDATE producto SET $campos WHERE id='$id'";
if ($mysqli->query($query)) {
    if (($_FILES["file1"]["error"] > 0)) {
    } else {
        $nom_archivo = $_FILES['file1']['name']; // Para conocer el nombre del archivo
        $ruta = "../images/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
        $archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
        $subir = move_uploaded_file($archivo, $ruta); //se sube el archivo
        $sentencia_img = "UPDATE producto SET foto='$ruta' WHERE id='$id' ";
        $mysqli->query($sentencia_img) or die ("Error al actualizar datos" . mysqli_error($mysqli));
    }
    header("Location: ../ventas.php");
} else {
    echo "Error no se pudo actualizar los datos";
}