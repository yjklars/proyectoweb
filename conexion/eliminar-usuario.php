<?php
include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM boleta WHERE IDUSUARIO=$id";
$query=mysqli_query($con,$sql);
$sql="DELETE FROM carrito WHERE IDUSUARIO=$id";
$query=mysqli_query($con,$sql);
$sql="DELETE FROM usuario WHERE IDUSUARIO=$id";
$query=mysqli_query($con,$sql);


if($query){
    header("Location: ../panel-de-control-usuario.php");
}

?>