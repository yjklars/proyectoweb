<?php
$error=isset($_GET['error'])?$_GET['error'] : '';
if ($error == 1){
    $text_error="El usuario ya se encuentra registrado!";
}
else{
    $text_error="El correo eletrónico ya se encuentra registrado!";
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
                            <a class="nav-link" href="nosotros.php">ACERCA DE NOSOTROS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="soporte.php">SOPORTE</a>
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

    <!-- Registro:
    1)Sin codigo php, se busca validar solo la entrada de datos del formulario.
    2)Cuando se aplique php, se buscará implementar que el user se registre, y sus datos no se repitan con algun usuario registrado en la base de datos.
    -->
    <div class="container-fluid pt-2 pb-5" style="background-color:#121212">
        <div class="container pt-5 pb-3 px-5 my-5">
            <form action="conexion/insertar_usuario.php" method="POST" class="needs-validation border border-5 bg-secondary-subtle" novalidate data-bs-theme="dark">
                <div class="row justify-content-center text-center pt-5">
                    <div class="col-4">
                        <h3>REGISTRARSE</h3>
                    </div>
                </div>
                <div class="row mt-4 text-center">
                    <div class="col">
                        <p1>Para <strong>registrarse</strong> llene los campos necesarios a continuación.</p1>
                    </div>
                </div>
                <div class="row mt-4 justify-content-center">
                    <div class="col-4">
                        <input type="text" class="form-control" name="usuario" placeholder="Ingrese un usuario" required>
                    </div>
                </div>
                <div class="row mt-4 justify-content-center">
                    <div class="col-4">
                        <input type="password" class="form-control" name="clave" placeholder="Ingrese una contraseña" required>
                    </div>
                </div>
                <div class="row mt-4 justify-content-center">
                    <div class="col-4">
                        <input type="email" class="form-control" name="email" placeholder="Ingrese un correo electrónico" required>
                    </div>
                </div>
                <div class="row mt-4 justify-content-center">
                    <div class="col-4">
                        <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" required>
                    </div>
                </div>
                <div class="row mt-4 justify-content-center">
                    <div class="col-4">
                        <select name="genero" id="genero" class="form-select" required>
                            <option selected disabled value="">Género</option>
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-4 justify-content-center">
                    <div class="col-4">
                    <select name="pais" id="pais" class="form-select" required>
                        <option selected disabled value="">País de residencia</option>
                        <option value="Afganistán">Afganistán</option>
                        <option value="Albania">Albania</option>
                        <option value="Alemania">Alemania</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguila">Anguila</option>
                        <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                        <option value="Antártida">Antártida</option>
                        <option value="Arabia Saudí">Arabia Saudí</option>
                        <option value="Argelia">Argelia</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaiyán">Azerbaiyán</option>
                        <option value="San Bartolomé">San Bartolomé</option>
                        <option value="Bonaire, San Eustaquio y Saba">Bonaire, San Eustaquio y Saba</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bangladés">Bangladés</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belice">Belice</option>
                        <option value="Benín">Benín</option>
                        <option value="Bermudas">Bermudas</option>
                        <option value="Bielorrusia">Bielorrusia</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
                        <option value="Botsuana">Botsuana</option>
                        <option value="Brasil">Brasil</option>
                        <option value="Brunéi">Brunéi</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Bután">Bután</option>
                        <option value="Bélgica">Bélgica</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curazao">Curazao</option>
                        <option value="Cabo Verde">Cabo Verde</option>
                        <option value="Camboya">Camboya</option>
                        <option value="Camerún">Camerún</option>
                        <option value="Canadá">Canadá</option>
                        <option value="Catar">Catar</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Chipre">Chipre</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoras">Comoras</option>
                        <option value="Congo">Congo</option>
                        <option value="Corea del Sur">Corea del Sur</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Costa de Marfil">Costa de Marfil</option>
                        <option value="Croacia">Croacia</option>
                        <option value="Dinamarca">Dinamarca</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egipto">Egipto</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Eslovaquia">Eslovaquia</option>
                        <option value="Eslovenia">Eslovenia</option>
                        <option value="España">España</option>
                        <option value="Estados Unidos">Estados Unidos</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Esuatini">Esuatini</option>
                        <option value="Etiopía">Etiopía</option>
                        <option value="Filipinas">Filipinas</option>
                        <option value="Finlandia">Finlandia</option>
                        <option value="Fiyi">Fiyi</option>
                        <option value="Francia">Francia</option>
                        <option value="Gabón">Gabón</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Granada">Granada</option>
                        <option value="Grecia">Grecia</option>
                        <option value="Groenlandia">Groenlandia</option>
                        <option value="Guadalupe">Guadalupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guayana Francesa">Guayana Francesa</option>
                        <option value="Guernesey">Guernesey</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bisáu">Guinea-Bisáu</option>
                        <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haití">Haití</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungría">Hungría</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Irak">Irak</option>
                        <option value="Irlanda">Irlanda</option>
                        <option value="Irán">Irán</option>
                        <option value="Isla Bouvet">Isla Bouvet</option>
                        <option value="Isla Norfolk">Isla Norfolk</option>
                        <option value="Isla de Man">Isla de Man</option>
                        <option value="Isla de Navidad">Isla de Navidad</option>
                        <option value="Islandia">Islandia</option>
                        <option value="Islas Aland">Islas Aland</option>
                        <option value="Islas Caimán">Islas Caimán</option>
                        <option value="Islas Cocos">Islas Cocos</option>
                        <option value="Islas Cook">Islas Cook</option>
                        <option value="Islas Feroe">Islas Feroe</option>
                        <option value="Islas Georgias del Sur y Sandwich del Sur">Islas Georgias del Sur y Sandwich del Sur</option>
                        <option value="Islas Heard y Mc Donald">Islas Heard y Mc Donald</option>
                        <option value="Islas Malvinas">Islas Malvinas</option>
                        <option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
                        <option value="Islas Marshall">Islas Marshall</option>
                        <option value="Islas Pitcairn">Islas Pitcairn</option>
                        <option value="Islas Salomón">Islas Salomón</option>
                        <option value="Islas Turcas y Caicos">Islas Turcas y Caicos</option>
                        <option value="Islas Ultramarinas Menores de Estados Unidos">Islas Ultramarinas Menores de Estados Unidos</option>
                        <option value="Islas Vírgenes Británicas">Islas Vírgenes Británicas</option>
                        <option value="Islas Vírgenes de los Estados Unidos">Islas Vírgenes de los Estados Unidos</option>
                        <option value="Israel">Israel</option>
                        <option value="Italia">Italia</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japón">Japón</option>
                        <option value="Jersey">Jersey</option>
                        <option value="Jordania">Jordania</option>
                        <option value="Kazajistán">Kazajistán</option>
                        <option value="Kenia">Kenia</option>
                        <option value="Kirguistán">Kirguistán</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Kosovo">Kosovo</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Líbano">Líbano</option>
                        <option value="Laos">Laos</option>
                        <option value="Lesoto">Lesoto</option>
                        <option value="Letonia">Letonia</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libia">Libia</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lituania">Lituania</option>
                        <option value="Luxemburgo">Luxemburgo</option>
                        <option value="Macao">Macao</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malasia">Malasia</option>
                        <option value="Malaui">Malaui</option>
                        <option value="Maldivas">Maldivas</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marruecos">Marruecos</option>
                        <option value="Martinica">Martinica</option>
                        <option value="Mauricio">Mauricio</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Micronesia">Micronesia</option>
                        <option value="Moldavia">Moldavia</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="México">México</option>
                        <option value="Mónaco">Mónaco</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Níger">Níger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Noruega">Noruega</option>
                        <option value="Nueva Caledonia">Nueva Caledonia</option>
                        <option value="Nueva Zelanda">Nueva Zelanda</option>
                        <option value="Níger">Níger</option>
                        <option value="Omán">Omán</option>
                        <option value="Países Bajos">Países Bajos</option>
                        <option value="Pakistán">Pakistán</option>
                        <option value="Palaos">Palaos</option>
                        <option value="Palestina">Palestina</option>
                        <option value="Panamá">Panamá</option>
                        <option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Perú">Perú</option>
                        <option value="Polinesia Francesa">Polinesia Francesa</option>
                        <option value="Polonia">Polonia</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Reino Unido">Reino Unido</option>
                        <option value="República Centroafricana">República Centroafricana</option>
                        <option value="República Checa">República Checa</option>
                        <option value="República Dominicana">República Dominicana</option>
                        <option value="Ruanda">Ruanda</option>
                        <option value="Rumanía">Rumanía</option>
                        <option value="Rusia">Rusia</option>
                        <option value="Sahara Occidental">Sahara Occidental</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Samoa Americana">Samoa Americana</option>
                        <option value="San Cristóbal y Nieves">San Cristóbal y Nieves</option>
                        <option value="San Marino">San Marino</option>
                        <option value="San Martín">San Martín</option>
                        <option value="San Pedro y Miquelón">San Pedro y Miquelón</option>
                        <option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
                        <option value="Santa Elena">Santa Elena</option>
                        <option value="Santa Lucía">Santa Lucía</option>
                        <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leona">Sierra Leona</option>
                        <option value="Singapur">Singapur</option>
                        <option value="Siria">Siria</option>
                        <option value="Somalia">Somalia</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Suazilandia">Suazilandia</option>
                        <option value="Sudáfrica">Sudáfrica</option>
                        <option value="Sudán">Sudán</option>
                        <option value="Sudán del Sur">Sudán del Sur</option>
                        <option value="Suecia">Suecia</option>
                        <option value="Suiza">Suiza</option>
                        <option value="Surinam">Surinam</option>
                        <option value="Svalbard y Jan Mayen">Svalbard y Jan Mayen</option>
                        <option value="Tailandia">Tailandia</option>
                        <option value="Taiwán">Taiwán</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Tayikistán">Tayikistán</option>
                        <option value="Territorio Británico del Océano Índico">Territorio Británico del Océano Índico</option>
                        <option value="Territorios Australes Franceses">Territorios Australes Franceses</option>
                        <option value="Timor Oriental">Timor Oriental</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                        <option value="Túnez">Túnez</option>
                        <option value="Turkmenistán">Turkmenistán</option>
                        <option value="Turquía">Turquía</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Ucrania">Ucrania</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistán">Uzbekistán</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Wallis y Futuna">Wallis y Futuna</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Yibuti">Yibuti</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabue">Zimbabue</option>
                    </select>
                    </div>
                </div>
                <div class="row mt-4 justify-content-center">
                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="condiciones" required>
                            <label class="form-check-label" for="condiciones">Acepto los terminos y condiciones.</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 mb-5 justify-content-center text-center">
                    <div class="col-4">
                        <button type="submit" class="btn btn-secondary">Registrarse</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true" data-bs-theme="dark">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Error</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo $text_error; ?>
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