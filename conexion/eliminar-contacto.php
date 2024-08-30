<?php
include("conexion.php");
session_start();
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM contacto WHERE IDCONTACTO=$id";
$query=mysqli_query($con,$sql);
if($query){
    header("Location: ../panel-de-control-contacto.php");
    exit();
}else{
    echo "Se ha generado un error al eliminar el contacto!";
}

?>