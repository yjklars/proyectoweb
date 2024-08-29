<?php
include("conexion/conexion.php"); 
session_start();
$con=conectar();
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

    <div class="container-fluid mb-1 p-0" style="background-color:#121212">
        <div class="container pt-5">
            <div class="row pb-3">
                <div class="col text-center">
                    <h1>Resident Evil 4</h1>
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
                                <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2050650/ss_ab807f8ad9e968a620777caf483cb6020367b9ee.1920x1080.jpg?t=1707455805" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2050650/ss_59d1b19964cc532213df92c8287b75a0bffeb33c.1920x1080.jpg?t=1707455805" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2050650/ss_69810f4cd155912fdfdd21da70181df7d454c874.600x338.jpg?t=1707455805" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2050650/ss_72888d13c9e3995f05a2886a51f0dc8791e28afa.600x338.jpg?t=1707455805" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-4 rounded" style="background-color:#121212">
                <div class="col-9 ps-4">
                    <div>
                        <a href="#" class="btn btn-outline-secondary btn-sm">Terror</a>
                        <a href="#" class="btn btn-outline-secondary btn-sm">Acción</a>
                        <a href="#" type="button" class="btn btn-outline-secondary btn-sm">Un jugador</a>
                    </div>
                    
                    <h5 class="my-3">Descripción</h5>
                    <span>
                        La pesadilla renace en esta reimaginación moderna de uno de los capítulos más icónicos de la saga Resident Evil.<br><br>Resident Evil 4 Remake te invita a vivir de nuevo la experiencia que redefinió el género de survival horror, ahora con gráficos impresionantes, jugabilidad mejorada y una narrativa más profunda.

                        Seis años después del desastre biológico de Raccoon City, el agente especial del gobierno, Leon S. Kennedy, es enviado a una remota aldea en Europa para rescatar a Ashley Graham, la hija del presidente de los Estados Unidos.<br><br>Lo que parecía ser una misión de rescate de rutina pronto se convierte en una lucha desesperada por sobrevivir, cuando Leon se enfrenta a un pueblo plagado de enemigos retorcidos y controlados por un parásito letal conocido como Las Plagas. Cada paso que das te adentra más en un oscuro y peligroso mundo donde el horror acecha en cada esquina.

                        <br><br>El remake utiliza el motor RE Engine para ofrecer una atmósfera visualmente deslumbrante y más envolvente que nunca. Los gráficos de última generación dan vida a cada detalle del juego, desde los enemigos deformes hasta los oscuros entornos rurales.<br><br>Además, la jugabilidad ha sido renovada para ser más fluida y dinámica, sin perder la sensación de vulnerabilidad que define la experiencia de Resident Evil. Enfrentarás a los icónicos Ganados, quienes han sido rediseñados con una inteligencia artificial mejorada, haciendo que cada enfrentamiento sea más intenso y aterrador.

                        <br><br>La narrativa ha sido expandida y enriquecida, brindando una nueva perspectiva sobre la historia y los personajes, revelando secretos ocultos que añaden más profundidad al mundo de Resident Evil. Mientras avanzas, deberás administrar cuidadosamente tus recursos y tomar decisiones estratégicas para sobrevivir. Cada bala cuenta, cada recurso es crucial, y cada error puede ser fatal.

                        <br><br>Además de la campaña principal, el juego ofrece modos adicionales como el desafiante Mercenarios, donde tus habilidades serán puestas a prueba en combates contra oleadas de enemigos. Con niveles de dificultad ajustables, Resident Evil 4 Remake se adapta tanto a veteranos de la saga como a nuevos jugadores, garantizando una experiencia inolvidable para todos.

                        <br><br>Resident Evil 4 Remake es más que una simple recreación; es una reinvención que ofrece tanto nostalgia como una emocionante novedad, entregando una dosis de terror moderno mientras honra al clásico. ¿Estás listo para enfrentar el horror y cumplir tu misión? La oscuridad te espera.
                    </span>
                </div>
                <div class="col-3">
                    <div class="row mb-5">
                        <div class="col">
                            <div class="d-grid gap-4">
                                <button type="button" class="btn btn-light btn-lg">Comprar</button>
                                <button type="button" class="btn btn-light btn-lg">Añadir al carro</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="m-0">Detalles del juego</p>
                            <p class="m-0">Fecha de lanzamiento:</p>
                            <p class="m-0">Desarrollador:</p>
                            <p class="m-0">Editor:</p>
                            <p class="m-0">Sistema operativo:</p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>