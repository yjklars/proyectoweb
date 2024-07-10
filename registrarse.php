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
                            <a class="nav-link" href="#">ACERCA DE NOSOTROS</a>
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
            <form class="needs-validation border border-5 bg-secondary-subtle" novalidate data-bs-theme="dark">
                <div class="row justify-content-center text-center pt-5">
                    <div class="col-4">
                        <h3>REGISTRARSE</h3>
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
                        <input type="email" class="form-control" name="correo" placeholder="Ingrese un correo electrónico" required>
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
                            <option value="AF">Afganistán</option>
                            <option value="AL">Albania</option>
                            <option value="DE">Alemania</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguila</option>
                            <option value="AG">Antigua y Barbuda</option>
                            <option value="AQ">Antártida</option>
                            <option value="SA">Arabia Saudí</option>
                            <option value="DZ">Argelia</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaiyán</option>
                            <option value="BL">BL</option>
                            <option value="BQ">BQ</option>
                            <option value="BS">Bahamas</option>
                            <option value="BD">Bangladés</option>
                            <option value="BB">Barbados</option>
                            <option value="BZ">Belice</option>
                            <option value="BJ">Benín</option>
                            <option value="BM">Bermudas</option>
                            <option value="BY">Bielorrusia</option>
                            <option value="BO">Bolivia</option>
                            <option value="BA">Bosnia y Herzegovina</option>
                            <option value="BW">Botsuana</option>
                            <option value="BR">Brasil</option>
                            <option value="BN">Brunéi</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="BT">Bután</option>
                            <option value="BE">Bélgica</option>
                            <option value="CU">CU</option>
                            <option value="CW">CW</option>
                            <option value="CV">Cabo Verde</option>
                            <option value="KH">Camboya</option>
                            <option value="CM">Camerún</option>
                            <option value="CA">Canadá</option>
                            <option value="QA">Catar</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CY">Chipre</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoras</option>
                            <option value="CG">Congo</option>
                            <option value="KR">Corea del Sur</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Costa de Marfil</option>
                            <option value="HR">Croacia</option>
                            <option value="DK">Dinamarca</option>
                            <option value="DM">Dominica</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egipto</option>
                            <option value="SV">El Salvador</option>
                            <option value="AE">Emiratos Árabes Unidos</option>
                            <option value="ER">Eritrea</option>
                            <option value="SK">Eslovaquia</option>
                            <option value="SI">Eslovenia</option>
                            <option value="ES">España</option>
                            <option value="US">Estados Unidos</option>
                            <option value="EE">Estonia</option>
                            <option value="SZ">Esuatini</option>
                            <option value="ET">Etiopia</option>
                            <option value="PH">Filipinas</option>
                            <option value="FI">Finlandia</option>
                            <option value="FJ">Fiyi</option>
                            <option value="FR">Francia</option>
                            <option value="GA">Gabón</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GD">Granada</option>
                            <option value="GR">Grecia</option>
                            <option value="GL">Groenlandia</option>
                            <option value="GP">Guadalupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GF">Guayana Francesa</option>
                            <option value="GG">Guernesey</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bisáu</option>
                            <option value="GQ">Guinea Ecuatorial</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haití</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungría</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IQ">Irak</option>
                            <option value="IE">Irlanda</option>
                            <option value="IR">Irán</option>
                            <option value="BV">Isla Bouvet</option>
                            <option value="NF">Isla Norfolk</option>
                            <option value="IM">Isla de Man</option>
                            <option value="CX">Isla de Navidad</option>
                            <option value="IS">Islandia</option>
                            <option value="AX">Islas Aland</option>
                            <option value="KY">Islas Caimán</option>
                            <option value="CC">Islas Cocos</option>
                            <option value="CK">Islas Cook</option>
                            <option value="FO">Islas Feroe</option>
                            <option value="GS">Islas Georgias del Sur y Sandwich del Sur</option>
                            <option value="HM">Islas Heard y Mc Donald</option>
                            <option value="FK">Islas Malvinas</option>
                            <option value="MP">Islas Marianas del Norte</option>
                            <option value="MH">Islas Marshall</option>
                            <option value="PN">Islas Pitcairn</option>
                            <option value="SB">Islas Salomón</option>
                            <option value="TC">Islas Turcas y Caicos</option>
                            <option value="UM">Islas Ultramarinas Menores de Estados Unidos</option>
                            <option value="VG">Islas Vírgenes Británicas</option>
                            <option value="VI">Islas Vírgenes de los Estados Unidos</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italia</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japón</option>
                            <option value="JE">Jersey</option>
                            <option value="JO">Jordania</option>
                            <option value="KZ">Kazajistán</option>
                            <option value="KE">Kenia</option>
                            <option value="KG">Kirguistán</option>
                            <option value="KI">Kiribati</option>
                            <option value="XK">Kosovo</option>
                            <option value="KW">Kuwait</option>
                            <option value="LA">Laos</option>
                            <option value="LS">Lesoto</option>
                            <option value="LV">Letonia</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libia</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lituania</option>
                            <option value="LU">Luxemburgo</option>
                            <option value="LB">Líbano</option>
                            <option value="MF">MF</option>
                            <option value="MO">Macao</option>
                            <option value="MK">Macedonia del Norte</option>
                            <option value="MG">Madagascar</option>
                            <option value="MY">Malasia</option>
                            <option value="MW">Malaui</option>
                            <option value="MV">Maldivas</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MA">Marruecos</option>
                            <option value="MQ">Martinica</option>
                            <option value="MU">Mauricio</option>
                            <option value="MR">Mauritania</option>
                            <option value="YT">Mayotte</option>
                            <option value="FM">Micronesia</option>
                            <option value="MD">Moldavia</option>
                            <option value="MN">Mongolia</option>
                            <option value="ME">Montenegro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="MX">México</option>
                            <option value="MC">Mónaco</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NO">Noruega</option>
                            <option value="NC">Nueva Caledonia</option>
                            <option value="NZ">Nueva Zelanda</option>
                            <option value="NE">Níger</option>
                            <option value="OM">Omán</option>
                            <option value="PK">Pakistán</option>
                            <option value="PW">Palaos</option>
                            <option value="PS">Palestina</option>
                            <option value="PA">Panamá</option>
                            <option value="PG">Papúa Nueva Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="NL">Países Bajos</option>
                            <option value="PE">Perú</option>
                            <option value="PF">Polinesia Francesa</option>
                            <option value="PL">Polonia</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="GB">Reino Unido</option>
                            <option value="BH">Reino de Baréin</option>
                            <option value="CF">República Centroafricana</option>
                            <option value="CZ">República Checa</option>
                            <option value="CD">República Democrática del Congo</option>
                            <option value="DO">República Dominicana</option>
                            <option value="RE">Reunión</option>
                            <option value="RW">Ruanda</option>
                            <option value="RO">Rumanía</option>
                            <option value="RU">Rusia</option>
                            <option value="SS">SS</option>
                            <option value="SX">SX</option>
                            <option value="WS">Samoa</option>
                            <option value="AS">Samoa Americana</option>
                            <option value="KN">San Cristóbal y Nieves</option>
                            <option value="SM">San Marino</option>
                            <option value="PM">San Pedro y Miquelón</option>
                            <option value="VC">San Vicente y las Granadinas</option>
                            <option value="SH">Santa Elena</option>
                            <option value="LC">Santa Lucía</option>
                            <option value="VA">Santa Sede</option>
                            <option value="ST">Santo Tomé y Príncipe</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leona</option>
                            <option value="SG">Singapur</option>
                            <option value="SY">Siria</option>
                            <option value="SO">Somalia</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="ZA">Sudáfrica</option>
                            <option value="SD">Sudán</option>
                            <option value="SE">Suecia</option>
                            <option value="CH">Suiza</option>
                            <option value="SR">Surinam</option>
                            <option value="SJ">Svalbard y Jan Mayen</option>
                            <option value="EH">Sáhara Occidental</option>
                            <option value="TH">Tailandia</option>
                            <option value="TW">Taiwán</option>
                            <option value="TZ">Tanzania</option>
                            <option value="TJ">Tayikistán</option>
                            <option value="IO">Territorio Británico del Océano Índico</option>
                            <option value="TF">Territorios Australes Franceses</option>
                            <option value="TL">Timor Oriental</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad y Tobago</option>
                            <option value="TM">Turkmenistán</option>
                            <option value="TR">Turquía</option>
                            <option value="TV">Tuvalu</option>
                            <option value="TN">Túnez</option>
                            <option value="UA">Ucrania</option>
                            <option value="UG">Uganda</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistán</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Vietnam</option>
                            <option value="WF">Wallis y Futuna</option>
                            <option value="YE">Yemen</option>
                            <option value="DJ">Yibuti</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabue</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-4 justify-content-center">
                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="condiciones" required>
                            <label class="form-check-label" for="condiciones">Acepto los terminos y condiciones</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 justify-content-center text-center">
                    <div class="col-4">
                        <button type="submit" class="btn btn-secondary">Iniciar sesión</button>
                    </div>
                </div>
                <div class="row mt-4 mb-5 justify-content-center">
                    <div class="col-2 text-center">
                        <span><a href="#">¿Olvidaste tu contraseña?</a></span>
                    </div>
                    <div class="col-2 text-center">
                        <span><a href="#">¿No estás registrado?</a></span>
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