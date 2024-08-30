<?php
include("conexion.php");
session_start();
$con=conectar();
//var_dump($_POST);

$id_usuario=$_POST['id'];

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$email=$_POST['email'];
$nombre=$_POST['nombre'];
$genero=$_POST['genero'];
$pais=$_POST['pais'];
$adm=$_POST['adm'];
//echo("INSERT INTO usuario VALUES ('$usuario','$password','$email','$nombre','$genero','$pais')");
$sql="UPDATE usuario SET usuario='$usuario', clave='$clave', email='$email', genero='$genero', pais='$pais', adm=$adm WHERE idusuario=$id_usuario";
$query=mysqli_query($con,$sql);

if($query){
    header("Location: ../panel-de-control-usuario.php");
}

?>