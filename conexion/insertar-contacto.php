<?php
include("conexion.php");
session_start();
$con=conectar();

$email=$_POST['correoContacto'];
$asunto=$_POST['asuntoContacto'];
$mensaje=$_POST['mensajeContacto'];

$sql="INSERT INTO contacto (IDCONTACTO,EMAIL,ASUNTO,MENSAJE) VALUES (null,'$email','$asunto','$mensaje')";
$query=mysqli_query($con,$sql);
if($query){
    header("Location: ../nosotros.php?val=1");
    exit();
}else{
    echo "Se ha generado un error al guardar el contacto!";
}

?>