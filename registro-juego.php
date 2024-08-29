<?php
include("conexion/conexion.php"); 
session_start();
$con=conectar();
$error=isset($_GET['error'])?$_GET['error'] : '';

if($error == 1){
    $error="Este juego ya se encuentra registrado en la página!";
}elseif($error == 2){
    $error="El precio del juego deber ser 0 CLP o mayor!";
}elseif($error == 3){
    $error="El precio del juego no debe superar los 500000 CLP!";
}elseif($error == 4){
    $error="La oferta del juego deber ser 0% o mayor!";
}elseif($error == 5){
    $error="La oferta del juego no debe superar el 100%!";
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
                        <!-- Mejorar con PHP el resalte de la fuente, dependiendo en qué página nos encontremos -->
                        <li class="nav-item">
                            <a class="nav-link" href="tienda.php">TIENDA</a> 
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
                            <li><a class="dropdown-item" href="conexion/logout.php">CERRAR SESION</a></li>
                        </ul>
                    </div>
                    <?php }?>
                </div>
            </div> 
        </nav>
    </div>

    <div class="container-fluid text-dark mb-1 p-0 pt-5" style="background-color:#121212">
        <div class="container pt-5 text-light" style="background-color:#121212">
            <form action="conexion/insertar_juego.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                <div class="row pb-5">
                    <div class="col text-center">
                        <h1>Formulario para ingresar juegos a la tienda</h1>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col">
                        <h4>Es importante rellenar cada campo establecido en este formulario para mostrar la información correcta en cada pagina de la tienda.</h4>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-6">
                        <label for="titulo" class="form-label"><p>Ingrese el título del juego:</p></label>
                        <input id="titulo" name="nombre" class="form-control form-control-sm" type="text" placeholder="Ingrese un título para el juego:" required>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-5">
                        <label for="et1" class="form-label"><p>Ingrese etiqueta 1:</p></label>
                        <input id="et1" name="etiqueta1" class="form-control form-control-sm" type="text" placeholder="Ingrese una etiqueta para su juego:" required>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-6">
                        <label for="im1" class="form-label"><p>Ingrese la url de la imagen 1 para el slider:</p></label>
                        <input id="im1" name="imagen1" class="form-control form-control-sm" type="text" required>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-5">
                        <label for="et2" class="form-label"><p>Ingrese etiqueta 2:</p></label>
                        <input id="et2" name="etiqueta2" class="form-control form-control-sm" type="text" placeholder="Ingrese una etiqueta para su juego:" required>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-6">
                        <label for="im2" class="form-label"><p>Ingrese la url de la imagen 2 para el slider:</p></label>
                        <input id="im2" name="imagen2" class="form-control form-control-sm" type="text" required>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-5">
                        <label for="et3" class="form-label"><p>Ingrese etiqueta 3:</p></label>
                        <input id="et3" name="etiqueta3" class="form-control form-control-sm" type="text" placeholder="Ingrese una etiqueta para su juego:" required>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-6">
                        <label for="im3" class="form-label"><p>Ingrese la url de la imagen 3 para el slider:</p></label>
                        <input id="im3" name="imagen3" class="form-control form-control-sm"  type="text" required>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-5">
                        <label for="et4" class="form-label"><p>Ingrese etiqueta 4:</p></label>
                        <input id="et4" name="etiqueta4" class="form-control form-control-sm" type="text" placeholder="Ingrese una etiqueta para su juego:" required>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-6">
                        <label for="im4" class="form-label"><p>Ingrese la url de la imagen 4 para el slider:</p></label>
                        <input id="im4" name="imagen4" class="form-control form-control-sm" type="text" required>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-5"></div>
                </div>
                <div class="row pb-3">
                    <div class="col"><h4>Detalles específicos del juego:</h4></div>
                </div>
                <div class="row pb-5">
                    <div class="col">
                        <label for="fec" class="form-label"><p>Ingrese la fecha de lanzamiento del juego:</p></label>
                        <input id="fec" name="fecha" class="form-control form-control-sm" type="date" required>
                    </div>
                    <div class="col">
                        <label for="desa" class="form-label"><p>Ingrese la desarrolladora del juego:</p></label>
                        <input id="desa" name="desarrollador" class="form-control form-control-sm" type="text" required>
                    </div>
                    <div class="col">
                        <label for="edit" class="form-label"><p>Ingrese la editora del juego:</p></label>
                        <input id="edit" name="editor" class="form-control form-control-sm" type="text" required>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col"><h4>Descripción del juego:</h4></div>
                </div>
                <div class="row pb-5">
                    <div class="col">
                        <textarea name="descripcion" class="form-control form-control-sm" placeholder="Escribe una breve descripción para tu juego" style="height: 400px" required></textarea>
                    </div>
                </div>

                <div class="row pb-5">
                    <div class="col-6">
                        <label for="prec" class="form-label"><p>Ingrese el precio del juego (recuerde que el precio debe ir desde 0 a 500000):</p></label>
                        <input id="prec" name="precio" class="form-control form-control-sm"  type="number" placeholder="Ingrese un precio:" required>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-5">
                        <label for="ofer" class="form-label"><p>Ingrese la oferta del juego (recuerde que la oferta debe ir desde 0 a 100):</p></label>
                        <input id="ofer" name="oferta" class="form-control form-control-sm"  type="number" placeholder="Ingrese una oferta:" required>
                    </div>
                </div>

                <div class="row pb-5">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-success"><strong>Registrar juego</strong></button>
                    </div>
                </div>
            </form>
        </div>
        <br><br>
    </div>

    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true" data-bs-theme="dark">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Error</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo $error; ?>
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
            var error = "<?php echo $error; ?>";
            if (error) {
                var errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
                errorModal.show();
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>