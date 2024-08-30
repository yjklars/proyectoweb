<?php
include("conexion/conexion.php"); 
session_start();
$con=conectar();
$val=isset($_GET['val'])?$_GET['val'] : '';

if($val == 1){
    $text_val="Se ha registrado exitosamente su mensaje!";
}


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
                        <li class="nav-item">
                            <a class="nav-link" href="tienda.php">TIENDA</a> 
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="categorias.php">TODOS LOS JUEGOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">ACERCA DE NOSOTROS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="soporte.php">SOPORTE</a>
                        </li>
                        <li>
                            <?php if(isset($_SESSION['USUARIO'])){
                                if($_SESSION['ADM'] == 1){?>
                                    <a class="nav-link" href="panel-de-control-usuario.php">PANEL DE CONTROL</a>
                            <?php }}?>
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

    <!-- Cuerpo de informacion -->
    <div class="container-fluid py-2" style="background-color:#121212">
        <div class="container pt-5">
            <div class="row">
                <div class="col">
                    <h1><strong>ACERCA DE ANCIENT</strong></h1>
                </div>
            </div>
            <div class="row my-5">
                <div class="col">
                    <h4><strong>Nuestra Misión</strong></h4>
                    <span>
                        En Ancient, nos apasiona el mundo de los videojuegos. 
                        Nuestra misión es ofrecer a los jugadores de todo el mundo una plataforma fácil de usar, segura y accesible para descubrir, 
                        comprar y disfrutar de los mejores juegos digitales del mercado.
                    </span>
                    <h4 class="mt-4"><strong>Quiénes Somos</strong></h4>
                    <span>
                        Somos un equipo de entusiastas de los videojuegos y expertos en tecnología con años de experiencia en la industria. 
                        Nos une el amor por los juegos y el deseo de crear una comunidad 
                        vibrante donde los jugadores puedan encontrar sus títulos favoritos y descubrir nuevas joyas.
                    </span>
                    <h4 class="mt-4"><strong>Ofrecemos</strong></h4>
                    <span>
                        Amplia Selección de Juegos: Desde los últimos lanzamientos hasta clásicos atemporales, nuestra biblioteca de juegos digitales tiene algo para todos.
                        <br><br>Ofertas Exclusivas: Disfruta de descuentos y promociones exclusivas para nuestros miembros.
                        <br><br>Seguridad y Comodidad: Proporcionamos un entorno de compra seguro y fiable, con múltiples opciones de pago y soporte al cliente disponible 24/7.
                        <br><br>Actualizaciones y Contenido: Mantente al día con las últimas actualizaciones, DLCs y contenido adicional para tus juegos favoritos.
                    </span>
                    <h4 class="mt-4"><strong>Nuestra Historia</strong></h4>
                    <span>
                        Ancient nació del deseo de crear una plataforma que reflejara nuestro amor por los videojuegos y nuestra visión de cómo debería ser una tienda de juegos digitales moderna. 
                        Desde nuestros humildes comienzos, hemos crecido gracias a la increíble comunidad de jugadores que ha confiado en nosotros para sus aventuras virtuales.
                    </span>
                    <h4 class="mt-4"><strong>Únete a Nosotros</strong></h4>
                    <span>
                        Únete a la comunidad de Ancient y sé parte de una nueva era en la distribución de juegos digitales. Juntos, haremos de cada partida una experiencia inolvidable.
                    </span>
                </div>
            </div>
        </div>
        <!-- Formulario de contacto simple -->
        <div class="container pb-4">
            <form action="conexion/insertar-contacto.php" method="POST" class="needs-validation" data-bs-theme="dark" novalidate>
                <div class="row justify-content-center">
                    <div class="col-4 text-center">
                        <h4>Contáctanos:</h4>
                    </div>
                </div>
                <div class="row mt-2 justify-content-center">
                    <div class="col-4">
                        <label for="correoContacto" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="correoContacto" name="correoContacto" placeholder="correo@ejemplo.com" required>
                        <div class="invalid-feedback">
                            Debe ingresar un correo electrónico válido!
                        </div>
                    </div>
                </div>
                <div class="row mt-2 justify-content-center">
                    <div class="col-4">
                        <label for="asuntoContacto" class="form-label">Asunto</label>
                        <input type="text" class="form-control" id="asuntoContacto" name="asuntoContacto" placeholder="Escribe el asunto de tu correo" required>
                        <div class="invalid-feedback">
                            Escriba un asunto!
                        </div>
                    </div>
                </div>
                <div class="row mt-2 justify-content-center">
                    <div class="col-4">
                        <textarea type="text-area" class="form-control" id="mensajeContacto" name="mensajeContacto" placeholder="Escribe tu mensaje" rows="3" required></textarea>
                        <div class="invalid-feedback">
                            Escriba un mensaje!
                        </div>
                    </div>
                </div>
                <div class="row mt-2 justify-content-center">
                    <div class="col-4 text-center">
                        <button type="submit" class="btn btn-secondary">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="valModal" tabindex="-1" aria-labelledby="valModalLabel" aria-hidden="true" data-bs-theme="dark">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="valModalLabel">Error</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo $text_val; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var val = "<?php echo $val; ?>";
            if (val) {
                var errorModal = new bootstrap.Modal(document.getElementById('valModal'));
                errorModal.show();
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>