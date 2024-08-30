<?php
include("conexion/conexion.php"); 
session_start();
$con=conectar();

$id_usuario=$_SESSION['IDUSUARIO'];

$sql="SELECT * FROM usuario";
$query=mysqli_query($con,$sql);

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
<!-- cuerpo: bg-dark -->
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
                        <li class="nav-item">
                            <?php if(isset($_SESSION['USUARIO'])){
                                if($_SESSION['ADM'] == 1){?>
                                    <a class="nav-link active" href="#" >PANEL DE CONTROL</a>
                                <?php }}?>
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

    <div class="container-fluid mb-1 p-0" style="background-color:#121212">
        <div class="container" style="background-color:#121212">
            <nav class="navbar navbar-dark navbar-expand-lg p-4">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar2" aria-controls="navbar2" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar2">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">USUARIOS</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="panel-de-control-juego.php">JUEGOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="panel-de-control-boleta.php">BOLETAS</a>
                            </li>
                            <li>
                                <a class="nav-link" href="panel-de-control-contacto.php">CONTACTO</a>
                            </li>
                        </ul>
                    </div>
                </div> 
            </nav>
        </div>
        <div class="container">
            <h5>Tabla de registros de usuarios de la tienda Ancient:</h5>
            <div class="row">
                <div class="col">
                    <table class="table" data-bs-theme="dark">
                        <thead>
                            <tr>
                                <th scope="col">IDUsuario</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Clave</th>
                                <th scope="col">Email</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Genero</th>
                                <th scope="col">País</th>
                                <th scope="col">ADM</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($resultado=mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <th><?php echo $resultado['IDUSUARIO'];?></th>
                                <th><?php echo $resultado['USUARIO'];?></th>
                                <th><?php echo $resultado['CLAVE'];?></th>
                                <th><?php echo $resultado['EMAIL'];?></th>
                                <th><?php echo $resultado['NOMBRE'];?></th>
                                <th><?php echo $resultado['GENERO'];?></th>
                                <th><?php echo $resultado['PAIS'];?></th>
                                <th><?php echo $resultado['ADM'];?></th>
                                <th>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminacion-<?php echo $resultado['IDUSUARIO'];?>">
                                        Eliminar
                                    </button>
                                    <div class="modal fade" id="ModalEliminacion-<?php echo $resultado['IDUSUARIO'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">¿Está seguro que desea eliminar el usuario seleccionado?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                    <a class="btn btn-danger" href="conexion/eliminar-usuario.php?id=<?php echo $resultado['IDUSUARIO'];?>">Eliminar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="modificar-usuario.php?id=<?php echo $resultado['IDUSUARIO'];?>" class="btn btn-info">Editar</a>
                                </th>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>