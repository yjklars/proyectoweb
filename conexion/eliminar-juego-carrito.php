<?php
include("conexion.php");
session_start();
$con=conectar();

$id=$_GET['id'];
$id_usuario=$_SESSION['IDUSUARIO'];

$sql="SELECT IDJUEGO FROM carrito WHERE IDUSUARIO=$id_usuario";
$query=mysqli_query($con,$sql);
$resultado=mysqli_fetch_array($query);
$resultados=explode(',',$resultado[0]);

if($resultados){
    if(count($resultados)> 1){
        if(($key = array_search($id, $resultados))!== false){
            unset($resultados[$key]);
        }

        $resultado=implode(',',$resultados);

        $sql="UPDATE carrito SET idjuego = '$resultado' WHERE idusuario=$id_usuario";
        $query=mysqli_query($con,$sql);
        if($query){
            header("Location: ../carro-de-compra.php");
            exit();
        }
    }else{
        if(($key = array_search($id, $resultados))!== false){
            unset($resultados[$key]);
        }
        $sql="UPDATE carrito SET idjuego=NULL WHERE idusuario=$id_usuario";
        $query=mysqli_query($con,$sql);
        if($query){
            header("Location: ../carro-de-compra.php");
            exit();
        }
    }
}else{
    echo "Error en la eliminación del juego";
}
?>