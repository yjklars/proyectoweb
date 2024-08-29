<?php
    include("conexion.php");
    $con=conectar();
    

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

    $comprobar_nombre="SELECT * FROM juego WHERE nombre='$nombre'";
    $resultado1=mysqli_query($con,$comprobar_nombre);

    if(mysqli_num_rows($resultado1) > 0){
        header("Location: ../registro-juego.php?error=1");
        exit();
    }elseif($precio < 0){
        header("Location: ../registro-juego.php?error=2");
        exit();
    }elseif($precio > 500000){
        header("Location: ../registro-juego.php?error=3");
    }elseif($oferta < 0){
        header("Location: ../registro-juego.php?error=4");
        exit();
    }elseif($oferta > 100){
        header("Location: ../registro-juego.php?error=5");
        exit();
    }
    else{
        $sql="INSERT INTO juego (idjuego, nombre, descripcion, etiqueta1, etiqueta2, etiqueta3, etiqueta4, fecha, desarrollador, editor, precio, oferta, imagen1, imagen2, imagen3, imagen4) VALUES (null, '$nombre','$descripcion','$etiqueta1','$etiqueta2','$etiqueta3','$etiqueta4','$fecha','$desarrollador','$editor', $precio, $oferta,'$imagen1','$imagen2','$imagen3','$imagen4')";
        $resultado=mysqli_query($con,$sql);
        if($resultado){
            header("Location: ../registro-juego-exitoso.php");
            exit();
        }
    }
?>