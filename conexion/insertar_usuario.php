<?php
    include("conexion.php");
    $con=conectar();
    //var_dump($_POST);

    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];
    $email=$_POST['email'];
    $nombre=$_POST['nombre'];
    $genero=$_POST['genero'];
    $pais=$_POST['pais'];
    //echo("INSERT INTO usuario VALUES ('$usuario','$password','$email','$nombre','$genero','$pais')");
    $comprobar_usuario="SELECT * FROM usuario WHERE usuario = '$usuario'";
    $comprobar_email="SELECT * FROM usuario WHERE email = '$email'";
    $resultado1=mysqli_query($con,$comprobar_usuario);
    $resultado2=mysqli_query($con,$comprobar_email);
    

    if(mysqli_num_rows($resultado1) > 0){
        header("Location: ../registrarse.php?error=1");
        exit();
    }elseif(mysqli_num_rows($resultado2) > 0){
        header("Location: ../registrarse.php?error=2");
        exit();
    }else{
        $sql="INSERT INTO usuario (idusuario, usuario, clave, email, nombre, genero, pais, adm) VALUES (null,'$usuario','$clave','$email','$nombre','$genero','$pais',0)";
        $query=mysqli_query($con,$sql);
        if ($query) {
            Header("Location: ../registro-exitoso.php");
            exit();
        } else {
            echo "Hubo un error al registrar el usuario.";
        }
    }
?>