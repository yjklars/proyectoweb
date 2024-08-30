<?php
include("conexion/conexion.php"); 
session_start();
$con=conectar();
$error=isset($_GET['error'])?$_GET['error'] : '';
$valido=isset($_GET['valido'])?$_GET['valido'] : '';

$id=$_GET['id'];

$sql="SELECT * from juego WHERE idjuego='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ancient</title>
    <link rel="stylesheet" href="Bootstrap/styles.css">
    <link rel="stylesheet" href="Bootstrap/stylesPersonalizados.css">
</head>
<body class="text-light" style="background-color:#18181C">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg body-tertiary p-4">
            <div class="container-fluid">
                <a href="tienda.php" class="me-3"><img src="Images/Ancient-white-logo.png" style="height: 70px; width: 70px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- Mejorar con PHP el resalte de la fuente, dependiendo en qué página nos encontremos -->
                        <li class="nav-item">
                            <a class="nav-link" href="tienda.php">TIENDA</a> 
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="categorias.php">TODOS LOS JUEGOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nosotros.php">ACERCA DE NOSOTROS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="soporte.php">SOPORTE</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#"></a>
                        </li>
                    </ul>
                    <?php if(!isset($_SESSION['USUARIO'])){ ?>
                    <div class="dropdown" data-bs-theme="dark">
                        <a class="nav-link dropdown-toggle text-white-50 p-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">SESION</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="iniciar-sesion.php">INICIAR SESION</a></li>
                            <li><a class="dropdown-item" href="registrarse.php">REGISTRARSE</a></li>
                        </ul>
                    </div>
                    <?php }?>
                    <?php if(isset($_SESSION['USUARIO'])){ ?>
                    <div class="dropdown" data-bs-theme="dark">
                        <a class="nav-link dropdown-toggle text-white-100 p-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['USUARIO'];?></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="perfil-jugador.php">MI PERFIL</a></li>
                            <li><a class="dropdown-item" href="carro-de-compra.php">MI CARRITO</a></li>
                            <li><a class="dropdown-item" href="conexion/logout.php">CERRAR SESION</a></li>
                        </ul>
                    </div>
                    <?php }?>
                </div>
            </div> 
        </nav>
    </div>

    <!-- MODAL -->
    <div class="modal fade" id="carritomodal" tabindex="-1" aria-labelledby="carritomodal" aria-hidden="true" data-bs-theme="dark">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="carritomodal">Advertencia</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    if($valido != 1){
                        if($error == ''){
                            echo "<p>¿Estás seguro de querer agregar este juego a tu carrito?</p>";
                        }
                        if($error == 1){
                            echo "<p class='text-alert'>Actualmente ya se encuentra este juego en su carrito!</p>";
                        }
                    }else{
                        echo "<p class='text-alert'>Se ha guardado su juego en el carrito!</p>";
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <?php if($valido=='') {
                        if(isset($_SESSION['USUARIO'])){
                            if($error == ''){
                                echo '<a href="conexion/añadir-al-carro.php?id='.$id.'" type="button" class="btn btn-light btn-lg">Añadir al carro</a>';
                            }
                        }else{
                            echo '<a href="iniciar-sesion.php" type="button" class="btn btn-light btn-lg">Añadir al carro</a>';
                        }
                    }?>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mb-1 p-0" style="background-color:#121212">
        <div class="container pt-5">
            <div class="row pb-3">
                <div class="col text-center">
                    <h1><?php echo ucwords($row['NOMBRE']);?></h1>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col d-flex justify-content-center">
                    <div id="carouselGameImage" class="carousel slide w-75" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselGameImage" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselGameImage" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselGameImage" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselGameImage" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $row['IMAGEN1'];?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $row['IMAGEN2'];?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $row['IMAGEN3'];?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $row['IMAGEN4'];?>" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-4 rounded" style="background-color:#121212">
                <div class="col-9 ps-4">
                    <div>
                        <a href="#" class="btn btn-outline-secondary btn-sm"><?php echo $row['ETIQUETA1'];?></a>
                        <a href="#" class="btn btn-outline-secondary btn-sm"><?php echo $row['ETIQUETA2'];?></a>
                        <a href="#" type="button" class="btn btn-outline-secondary btn-sm"><?php echo $row['ETIQUETA3'];?></a>
                    </div>
                    
                    <h5 class="my-3">Descripción del juego</h5>
                    <span>
                        <?php echo nl2br($row['DESCRIPCION']);?>
                    </span>
                </div>
                <div class="col-3">
                    <div class="row mb-5">
                        <div class="col">
                            <div class="d-grid gap-4">
                                <?php if ($row['OFERTA'] > 0){?>
                                    <?php $precio_final= round($row['PRECIO'] * (1 - $row['OFERTA'] / 100)); ?>
                                    <p class="m-0 text-center">Hay un descuento de <?php echo $row['OFERTA'];?>%!</p>
                                    <a href=<?php if(isset($_SESSION['USUARIO'])){echo "compra-individual.php?id=$id";}else{echo "iniciar-sesion.php";}?> type="button" class="btn btn-light btn-lg">Comprar <span class="text-decoration-line-through"><?php echo $row['PRECIO'];?></span><span> <?php echo $precio_final;?> CLP</span></a>
                                <?php }?>
                                <?php if ($row['OFERTA'] == 0){?>
                                    <a href=<?php if(isset($_SESSION['USUARIO'])){echo "compra-individual.php?id=$id";}else{echo "iniciar-sesion.php";}?> type="button" class="btn btn-light btn-lg">Comprar <span class=""><?php echo $row['PRECIO'];?> CLP</span></a>
                                <?php }?>
                                <button type="button" class="btn btn-light btn-lg" data-bs-toggle="modal" data-bs-target="#carritomodal">Añadir al carro</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="m-0">Detalles del juego</p>
                            <p class="m-0">Fecha de lanzamiento: <?php echo $row['FECHA'];?></p>
                            <p class="m-0">Desarrollador: <?php echo $row['DESARROLLADOR'];?></p>
                            <p class="m-0">Editor: <?php echo $row['EDITOR'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>

    <!-- Footer -->
    <div class="container-fluid pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-1">
                    <h5><strong>Redes</strong></h5>
                    <div class="row">
                        <div class="col-1">
                            <a href="https://es-la.facebook.com/" target="_blank"><img src="Images/facebook-icon.png" style="height: 40px; width: 40px;"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <a href="https://x.com/?lang-en=" target="_blank"><img src="Images/twitter-icon.png" style="height: 40px; width: 40px;"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <a href="https://www.instagram.com/" target="_blank"><img src="Images/instagram-icon.png" style="height: 40px; width: 40px;"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <a href="https://www.youtube.com/" target="_blank"><img src="Images/youtube-icon.png" style="height: 40px; width: 40px;"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <a href="https://discord.com/" target="_blank"><img src="Images/discord-icon.png" style="height: 40px; width: 40px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <h5><strong>Tiendas asociadas</strong></a></h5>
                    <div class="row mt-2">
                        <p><a href="https://store.steampowered.com/?l=spanish" class="link-light link-underline link-underline-opacity-0" target="_blank">Steam</a></p>
                        <p><a href="https://store.epicgames.com/es-ES/" class="link-light link-underline link-underline-opacity-0" target="_blank">Epic Games</a></p>
                        <p><a href="https://www.gog.com/" class="link-light link-underline link-underline-opacity-0" target="_blank">GoG.com</a></p>
                        <p><a href="https://itch.io/" class="link-light link-underline link-underline-opacity-0" target="_blank">Itch.io</a></p>
                    </div>
                </div>
                <div class="col-7">
                    <h5 class="text-center"><strong>Ancient</strong></h5>
                    <div class="row">
                        <p>
                            Ancient es tu destino definitivo para comprar y 
                            disfrutar de los mejores juegos digitales. 
                            Con una selección curada de títulos y ofertas exclusivas, 
                            nos dedicamos a ofrecerte una experiencia de juego inigualable. 
                            Síguenos en nuestras redes sociales y únete a nuestra comunidad de apasionados gamers. ¡Gracias por elegir Ancient!
                        </p>
                    </div>
                    <div class="row text-center">
                        <span>Contacto:</span>
                        <span>
                            soporte@ancient.com
                            <br>+1 (123) 456-7890
                        </span>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <span>© 2024 Ancient. Todos los derechos reservados.</span>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var error = "<?php echo $error; ?>";
            if (error) {
                var errorModal = new bootstrap.Modal(document.getElementById('carritomodal'));
                errorModal.show();
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var valido = "<?php echo $valido; ?>";
            if (valido) {
                var errorModal = new bootstrap.Modal(document.getElementById('carritomodal'));
                errorModal.show();
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>