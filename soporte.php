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
                <span class="navbar-brand h1">Ancient</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="tienda.php">TIENDA</a> 
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nosotros.php">ACERCA DE NOSOTROS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">SOPORTE</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#"></a>
                        </li>
                    </ul>
                    <div class="dropdown" data-bs-theme="dark">
                        <a class="nav-link dropdown-toggle text-white-50 p-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">SESION</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="iniciar-sesion.php">INICIAR SESION</a></li>
                            <li><a class="dropdown-item" href="registrarse.php">REGISTRARSE</a></li>
                        </ul>
                    </div>
                </div>
            </div> 
        </nav>
    </div>

    <div class="container-fluid py-2" style="background-color:#121212">
        <div class="container pt-5">
            <div class="row">
                <div class="col">
                    <h1>SOPORTE DE ANCIENT</h1>
                </div>
            </div>
            <div class="row py-5">
                <div class="col">
                    <div class="accordion accordion-flush" id="acordion1" data-bs-theme="dark">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                    ¿Cómo puedo crear una cuenta en Ancient?
                                </button>
                            </h2>
                            <div id="collapse-1" class="accordion-collpase collapse">
                                <div class="accordion-body">
                                    Para crear una cuenta en <strong>Ancient</strong>, debes ir a la sección <a href="#">Iniciar sesión</a> y presionar el enlace <a href="#">Crear cuenta</a>. Una vez allí, debe rellenar un formulario con los datos necesarios para su registro. Asegúrese de que su <strong>usuario</strong> y <strong>correo electrónico</strong> no se encuentren ya registrados.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    ¿Cómo puedo comprar juegos en Ancient?
                                </button>
                            </h2>
                            <div id="collapse-2" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Para comprar en nuestra tienda, es necesario tener una sesión iniciada. Puedes navegar a través de la página principal o buscar entre las categorías de juegos. Seleccionas el que te interese y te llevará a su página, una vez allí, presiona el boton de <strong>Comprar</strong> y ¡listo!.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    ¿Qué métodos de pago aceptan?
                                </button>
                            </h2>
                            <div id="collapse-3" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Aceptamos varias formas de pago, incluyendo tarjetas de crédito, PayPal y otras opciones de pago digital.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    ¿Cómo puedo descargar e instalar mis juegos comprados?
                                </button>
                            </h2>
                            <div id="collapse-4" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Después de completar tu compra, los juegos estarán disponibles en tu biblioteca. Haz clic en el juego que deseas descargar y sigue las instrucciones para la instalación.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    ¿Ofrecen reembolsos?
                                </button>
                            </h2>
                            <div id="collapse-5" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Sí, ofrecemos reembolsos bajo ciertas condiciones. Consulta nuestra Política de Reembolsos para obtener más detalles.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                                    ¿Cómo puedo contactar al soporte técnico?
                                </button>
                            </h2>
                            <div id="collapse-6" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Si necesitas ayuda, puedes contactarnos a través de nuestro formulario de contacto en la sección <strong>ACERCA DE NOSOTROS</strong>, enviarnos un correo electrónico a <strong>soporte@ancient.com</strong>, o llamarnos al +1 (123) 456-7890.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                                    ¿Cómo puedo actualizar mi información de cuenta?
                                </button>
                            </h2>
                            <div id="collapse-7" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Para actualizar tu información, inicia sesión en tu cuenta y ve a "Mi Perfil". Desde allí, puedes cambiar tu información personal y preferencias.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
                                    ¿Qué debo hacer si olvidé mi contraseña?
                                </button>
                            </h2>
                            <div id="collapse-8" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Si olvidaste tu contraseña, haz clic en <strong>¿Olvidaste tu contraseña?</strong> en la página de inicio de sesión y sigue las instrucciones para restablecerla.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modificar con php la visualización de este apartado: 
        1) Si se tiene una sesion inciada: te permitirá hacer preguntas especificas para cada videojuego.
        2) Si no se tiene una sesion iniciada: te aconsejará iniciar sesión para poder realizar una pregunta específica.
        -->
        <div class="container pt-5 pb-4">
            <div class="row pb-5">
                <div class="col-6">
                    <h1>Soporte específico por videojuego</h1>
                </div>
            </div>
            <!-- Con php automatizar el elemento 'select' de Bootstrap para que reconozca los juegos en la base de datos
            De esta manera poder actualizar este elemento a medida que se inserten o eliminen juegos.
            -->
            <form class="needs-validation" novalidate data-bs-theme="dark">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <label for="seleccion1" class="form-label">Seleccione el juego de la siguiente lista desplegable</label>
                        <select id="seleccion1" class="form-select" name="seleccion1" required>
                            <option selected disabled value="">Seleccione el juego</option>
                            <option value="#">Juego 1</option>
                            <option value="#">Juego 2</option>
                            <option value="#">Juego 3</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2 justify-content-center">
                    <div class="col-6">
                        <label for="asuntoJuego" class="form-label">Describa brevemente su problema</label>
                        <input id="asuntoJuego" class="form-control" name="asuntoJuego" placeholder="Asunto del problema" required>
                    </div>
                </div>
                <div class="row mt-2 justify-content-center">
                    <div class="col-6">
                        <label for="mensajeSoporte" class="form-label">Describa detalladamente su problema:</label>
                        <textarea type="text-area" class="form-control" id="mensajeSoporte" name="mensajeSoporte" placeholder="Mencionar juego, y situación específica, fecha, etc." rows="3" required></textarea>
                    </div>
                </div>
                <div class="row mt-2 justify-content-center">
                    <div class="col-6 text-center">
                        <button type="submit" class="btn btn-secondary">Enviar</button>
                    </div>
                </div>
            </form>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>