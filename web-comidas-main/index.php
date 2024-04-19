<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRIO SABROSO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="estilo.css">

    <?php
    define('APP_DIR', $_SERVER['DOCUMENT_ROOT'] . '/public/3.erronka/web-comidas-main/web-comidas-main'); //Aplikazioaren karpeta edozein lekutatik atzitzeko.
    define('HREF_VIEWS_DIR', '/public/3.erronka/web-comidas-main/web-comidas-mainsrc/views'); //Aplikazioaren views karpeta edozein lekutatik deitzeko
    define('HREF_SRC_DIR', '/public/3.erronka/web-comidas-main/web-comidas-mainsrc'); //Aplikazioaren views karpeta edozein lekutatik deitzeko
    $link = APP_DIR . "src/language/translations.php";
    require_once("language/translations.php");
    
    


    //XMLko konfiguraziotik hartzen dute informazioa
    $config = simplexml_load_file("conf.xml");

    $mainColor = $config->mainColor;
    $footerColor = $config->footerColor;
    $footer2Color = $config->footer2Color;


    ?>
    <style>
        :root {
            --mainColor:
                <?= $mainColor ?>
            ;
            --footerColor:
                <?= $footerColor ?>
            ;
            --footer2Color:
                <?= $footer2Color ?>
            ;
        }

        /* AZPIAN EGON BEAHR DA CSS-a mainColor eta footerColor erabiltzen dituztenak */
    </style>
</head>

<body>
    <!-- SECCION INICIO -->
    <section id="inicio">
        <header>
            <div class="contenido-header">
                <div class="logo">
                    <img src="img/trio_sabroso_logo-transformed.png" alt="" width="300" height="175">
                </div>
                <nav id="nav">
                    <ul>
                        <li><a href="#inicio" onclick="seleccionar()"><i class="fa-solid fa-house"></i><?= trans("Inicio")?></a></li>
                        <li><a href="#sabores" onclick="seleccionar()"><i class="fa-solid fa-ice-cream"></i><?= trans("Sabores")?></a>
                        </li>
                        <li><a href="#platos" onclick="seleccionar()"><i class="fa-solid fa-utensils"></i><?= trans("Platos")?></a>
                        </li>
                        <li><a href="#blog" onclick="seleccionar()"><i class="fa-solid fa-pen"></i>Blog</a></li>
                        <li><a href="#contacto" onclick="seleccionar()"><i class="fa-solid fa-comments"></i><?= trans("Contacto")?></a>
                        </li>
                        <li><a href="iniciarSesion.php" onclick="seleccionar()"><i
                                    class="fa-solid fa-sign-in"></i><?= trans("Iniciar")?><br> <?= trans("Sesion")?></a></li>
                    </ul>
                </nav>
                <div class="right-section">
                    <div class="social">
                        <a href="tel:+34 943 27 84 65"><i class="fa-solid fa-phone"></i>+34 943 27 84 65</a>
                        <a href="https://www.instagram.com/arzakrestaurant/"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://twitter.com/arzakrestaurant?lang=es"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                    <div class="language">
                        <div class="header grid-elem">
                            <?php require_once("selectLang.php"); ?>
                        </div>

                    </div>
                    <br><br>
                    <!-- Formulario para cambiar colores -->
                    <div class="form-colors">
                        <form action="update-colors.php" method="post">
                            <div class="color-field">
                                <label for="mainColor"><?= trans("Color primario:")?></label>
                                <input type="color" id="mainColor" name="mainColor" title="Color Principal"
                                    value="<?= $config->mainColor ?>" />
                            </div>
                            <div class="color-field">
                                <label for="footerColor"><?= trans("Color de footer:")?></label>
                                <input type="color" id="footerColor" name="footerColor" title="Color de Footer"
                                    value="<?= $config->footerColor ?>" />

                            </div>
                            <input type="submit" value="Actualizar">
                        </form>
                    </div>
                </div>
                <div class="nav-responsive" id="bar" onclick="mostrarOcultarMenu()">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </header>


        <!-- Carrusel -->
        <div class="carrusel">
            <div class="gallery js-flickity"
                data-flickity-options='{ "wrapAround":true, "pageDots": false, "autoPlay": true}'>
                <div class="gallery-cell">
                    <img src="img/1.jpg" alt="">
                </div>
                <div class="gallery-cell">
                    <img src="img/2.jpg" alt="">
                </div>
                <div class="gallery-cell">
                    <img src="img/3.jpg" alt="">
                </div>
                <div class="gallery-cell">
                    <img src="img/4.jpg" alt="">
                </div>
            </div>
            <div class="info">
                <h2><?= trans("Comidas exquisitas para el paladar!")?> </h2>
                <p><?=trans("¡Sabor en Tres Tiempos, Placer en Cada Bocado!")?></p>
                <button><?= trans("Leer más")?></button>
            </div>
        </div>

    </section>

    <!-- SECCION SABORES -->
    <section id="sabores">
        <h2><?= trans("Sabores")?></h2>
        <div class="fila">
            <div class="item">
                <div class="icono">
                    <img src="img/sabor1.png" alt="">
                </div>
                <div class="info">
                    <h3><?= trans("Ensladas")?></h3>
                    <p><?=trans("Crunch fresco, colores vibrantes, frescura saludable en cada hoja.")?></p>
                </div>
            </div>
            <div class="item">
                <div class="icono">
                    <img src="img/sabor2.png" alt="">
                </div>
                <div class="info">
                    <h3><?= trans("Tortas")?></h3>
                    <p><?=trans("Tierno deleite, dulce y esponjoso, fundiéndose en cada mordida.")?></p>
                </div>
            </div>
            <div class="item">
                <div class="icono">
                    <img src="img/sabor3.png" alt="">
                </div>
                <div class="info">
                    <h3><?= trans("Hamburguesas")?></h3>
                    <p><?=trans("Sabrosa explosión de carne, jugosidad y condimentos en cada bocado.")?></p>
                </div>
            </div>
        </div>

        <div class="fila">
            <div class="item">
                <div class="icono">
                    <img src="img/sabor4.png" alt="">
                </div>
                <div class="info">
                    <h3><?= trans("Helados")?></h3>
                    <p><?=trans("Fresco deleite cremoso, dulce frío que acaricia el paladar.")?></p>
                </div>
            </div>
            <div class="item">
                <div class="icono">
                    <img src="img/sabor5.png" alt="">
                </div>
                <div class="info">
                    <h3><?= trans("Pastas")?></h3>
                    <p><?=trans("Delicada pasta al dente, bañada en salsa, sabor reconfortante.")?></p>
                </div>
            </div>
            <div class="item">
                <div class="icono">
                    <img src="img/sabor6.png" alt="">
                </div>
                <div class="info">
                    <h3><?= trans("Galletas")?></h3>
                    <p><?=trans("Crujientes galletas, dulces tentaciones que endulzan el momento.")?></p>
                </div>
            </div>
        </div>

        <button><?= trans("Ver más")?></button>

    </section>

    <!-- SECCION PLATOS -->
    <section id="platos">
        <h2><?= trans("Platos")?></h2>

        <div class="fila">
            <div class="item">
                <img src="img/plato1.jpg" alt="" width="363" height="242.47">
                <p><?= trans("El kare")?></p>
            </div>
            <div class="item">
                <img src="img/plato2.jpg" alt="">
                <p><?= trans("Carne de Picanha")?></p>
            </div>
            <div class="item">
                <img src="img/plato3.jpg" alt="">
                <p>Phanaeng Curry</p>
            </div>
        </div>
        <div class="fila">
            <div class="item">
                <img src="img/plato4.jpg" alt="">
                <p><?= trans("Pollo a la brasa")?></p>
            </div>
            <div class="item">
                <img src="img/plato5.jpg" alt="">
                <p><?= trans("Plato de Pizza con rucula")?></p>
            </div>
            <div class="item">
                <img src="img/plato6.jpg" alt="">
                <p><?= trans("Plato de pastas con tuco")?></p>
            </div>
        </div>

        <button><?= trans("Ver más")?></button>

    </section>

    <!-- SECCION BLOG -->
    <section id="blog">
        <h2>Blog</h2>
        <div class="galeria-blog js-flickity" data-flickity-options='{ "wrapAround":true, "pageDots": true}'>
            <div class="gallery-cell">
                <div class="item">
                    <div class="foto">
                        <img src="img/cheff1.jpg" alt="">
                    </div>
                    <div class="info">
                        <h3><?= trans("El arte de las frutas")?></h3>
                        <p><?=trans("El aguacate también ayudará a que caiga menos el pelo, todo gracias a sus grasas saludables,
                            ácido omega 3 y vitaminas E y B.")?></p>
                    </div>
                </div>
            </div>
            <div class="gallery-cell">
                <div class="item">
                    <div class="foto">
                        <img src="img/cheff2.jpg" alt="">
                    </div>
                    <div class="info">
                        <h3><?= trans("Tratamientos prohibidos")?></h3>
                        <p><?=trans("Aguas minerales de Perrier, Vittel y Cristaline, entre otras, son sometidas a tratamientos
                            prohibidos por la normativa francesa.")?></p>
                    </div>
                </div>
            </div>
            <div class="gallery-cell">
                <div class="item">
                    <div class="foto">
                        <img src="img/cheff3.jpg" alt="">
                    </div>
                    <div class="info">
                        <h3><?= trans("Los beneficios de la inflacion")?></h3>
                        <p><?=trans("Los gigantes de la industria alimentaria y la gran distribución son los beneficiados de la
                            inflación.")?></p>
                    </div>
                </div>
            </div>
            <div class="gallery-cell">
                <div class="item">
                    <div class="foto">
                        <img src="img/cheff4.jpg" alt="">
                    </div>
                    <div class="info">
                        <h3><?= trans("Problemas con las frutas")?></h3>
                        <p><?=trans("Pagamos el kilo de limones casi 10 veces su valor en el campo. Por cuarto mes consecutivo,
                            esta fruta se coloca a la cabeza en el ranking de las diferencias de precio especulativas.")?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <button><?= trans("Leer más")?></button>
    </section>

    <!-- SECCION CONTACTO Y PIE DE PAGINA -->
    <section id="contacto">
        <div class="fila">
            <div class="col">
                <h1>Trio Sabroso</h1>
            </div>
            <div class="col">
                <h3><?= trans("Menu")?></h3>
                <a href="#inicio"><?= trans("Inicio")?></a>
                <a href="#sabores"><?= trans("Sabores")?></a>
                <a href="#sabores"><?= trans("Platos")?></a>
                <a href="#sabores">Blog</a>
            </div>
            <div class="col">
                <h3><?= trans("Cheffs")?></h3>
                <a href="#">Unaica</a>
                <a href="#">Porti</a>
                <a href="#">Murua</a>
            </div>
            <div class="col">
                <h3><?= trans("Redes sociales")?></h3>
                <div class="media">
                    <i class="fa-brands fa-twitter"></i> <a href="#">Twitter</a>
                </div>
                <div class="media">
                    <i class="fa-brands fa-instagram"></i> <a href="#">Instagram</a>
                </div>
            </div>
            <div class="col">
                <h3><?= trans("Comentario")?></h3>
                <form action="galdetegia.php" method="post">
                    <label for="izena"><?= trans("Nombre")?></label><br>
                    <input type="text" id="izena" name="izena" required><br><br>
                    <label for="komentarioa"><?= trans("Komentario:")?></label><br>
                    <textarea id="komentarioa" name="komentarioa" rows="4" cols="50" required></textarea><br><br>
                    <input type="submit" value="Bidali">
                </form>
            </div>
            <div class="col">
                <h3><?= trans("Comentario")?></h3>
                <?php
                $archivo_xml = 'iruzkinak.xml';
                if (file_exists($archivo_xml)) {
                    $xml = simplexml_load_file($archivo_xml);
                    if ($xml === false) {
                        echo "Errorea iruzkinak kargatzean.";
                    } else {
                        // Recorrer cada comentario en el archivo XML y mostrarlo
                        foreach ($xml->iruzkina as $iruzkina) {
                            echo "<div class='comment'>";
                            echo "<h4>" . htmlspecialchars($iruzkina->izena) . "</h4>";
                            echo "<p>" . htmlspecialchars($iruzkina->komentarioa) . "</p>";
                            echo "<small>Data: " . $iruzkina->data . "</small>";
                            echo "</div>";
                        }
                    }
                } else {
                    echo "Oraindik ez dago iruzkinik.";
                }
                ?>
            </div>
        </div>
    </section>



    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="script.js"></script>
</body>

</html>