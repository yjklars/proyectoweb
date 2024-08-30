<?php
include('conexion.php');
session_start();
$con=conectar();

$id=$_POST['id'];
$metodo_pago=$_POST['metodo_pago'];
$ultimo_id=$_POST['ultimo_id'];

$id_usuario=$_SESSION['IDUSUARIO'];

$sql="SELECT * from juego WHERE idjuego='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);


$total=round($row['PRECIO'] * (1-($row['OFERTA']/100)));

$sql="INSERT INTO boleta (idboleta, idusuario, total, metodo_pago) VALUES (null, $id_usuario, $total, '$metodo_pago')";
$query2=mysqli_query($con,$sql);

if($query2){
    header("Location: ../compra-exitosa.php");
}else{
    echo "ERROR EN LA COMPRA DEL JUEGO!";
}
?>