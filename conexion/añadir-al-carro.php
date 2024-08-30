<?php
include("conexion.php");
session_start();
$con=conectar();
$id=$_GET['id'];
$id_usuario=$_SESSION['IDUSUARIO'];


$sql = "SELECT idjuego FROM carrito WHERE idusuario='$id_usuario'";
$query = mysqli_query($con, $sql);
$resultado = mysqli_fetch_array($query);

if (isset($resultado['idjuego']) && !is_null($resultado['idjuego'])) {
    $id_acumulando = $resultado['idjuego'];

    $id_array = explode(',', $id_acumulando);
    if (!in_array($id, $id_array)) {
        $id_acumulando .= ',' . $id;
    } else {
        header("Location: ../juego.php?id=".$id."&error=1");
        exit();
    }
} else {
    $id_acumulando = $id;
}

$sql_update = "UPDATE carrito SET idjuego='$id_acumulando' WHERE idusuario='$id_usuario'";
$query_update = mysqli_query($con, $sql_update);

if ($query_update) {
    header("Location: ../juego.php?id=".$id."&valido=1");
    exit();
} else {
    echo "Error al actualizar el carrito.";
}
?>