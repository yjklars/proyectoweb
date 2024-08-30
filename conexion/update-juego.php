<?php
include("conexion.php");
session_start();
$con=conectar();
//var_dump($_POST);

$id_juego=$_POST['id'];

$nombre=strtolower($_POST['nombre']);
$etiqueta1=$_POST['etiqueta1'];
$etiqueta2=$_POST['etiqueta2'];
$etiqueta3=$_POST['etiqueta3'];
$etiqueta4=$_POST['etiqueta4'];
$fecha=$_POST['fecha'];
$desarrollador=$_POST['desarrollador'];
$editor=$_POST['editor'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$oferta=$_POST['oferta'];

$imagen1=$_POST['imagen1'];
$imagen2=$_POST['imagen2'];
$imagen3=$_POST['imagen3'];
$imagen4=$_POST['imagen4'];
//echo("INSERT INTO usuario VALUES ('$usuario','$password','$email','$nombre','$genero','$pais')");
$sql="UPDATE juego SET nombre='$nombre', etiqueta1='$etiqueta1', etiqueta2='$etiqueta2', etiqueta3='$etiqueta3', etiqueta4='$etiqueta4', fecha='$fecha', desarrollador='$desarrollador', editor='$editor', descripcion='$descripcion', precio=$precio, oferta=$oferta, imagen1='$imagen1', imagen2='$imagen2', imagen3='$imagen3', imagen4='$imagen4' WHERE IDJUEGO=$id_juego";
$query=mysqli_query($con,$sql);

if($query){
    header("Location: ../panel-de-control-juego.php");
}
?>
