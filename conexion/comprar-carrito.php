<?php
include('conexion.php');
session_start();
$con=conectar();

$metodo_pago=$_POST['metodo_pago'];
$ultimo_id=$_POST['ultimo_id'];
$id_usuario=$_SESSION['IDUSUARIO'];

$total=$_POST['total'];

$sql="INSERT INTO boleta (idboleta, idusuario, total, metodo_pago) VALUES (null, $id_usuario, $total, '$metodo_pago')";
$query2=mysqli_query($con,$sql);

$sql2="UPDATE carrito SET IDJUEGO=NULL WHERE idusuario=$id_usuario";
$query3=mysqli_query($con,$sql2);

if($query2){
    header("Location: ../compra-exitosa.php");
}else{
    echo "ERROR EN LA COMPRA DEL JUEGO!";
}
?>