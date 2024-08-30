<?php
include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM juego WHERE IDJUEGO=$id";
$query=mysqli_query($con,$sql);

if($query){
    header("Location: ../panel-de-control-juego.php");
}

?>