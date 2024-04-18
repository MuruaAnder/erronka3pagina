<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRIO SABROSO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="estilo.css">
    
    <?php
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
                <li><a href="#inicio" onclick="seleccionar()"><i class="fa-solid fa-house"></i>Inicio</a></li>
                <li><a href="#sabores" onclick="seleccionar()"><i class="fa-solid fa-ice-cream"></i>Sabores</a></li>
                <li><a href="#platos" onclick="seleccionar()"><i class="fa-solid fa-utensils"></i>Platos</a></li>
                <li><a href="#blog" onclick="seleccionar()"><i class="fa-solid fa-pen"></i>Blog</a></li>
                <li><a href="#contacto" onclick="seleccionar()"><i class="fa-solid fa-comments"></i>Contacto</a></li>
            </ul>
        </nav>
        <div class="right-section">
            <div class="social">
                <a href="tel:+34 943 27 84 65"><i class="fa-solid fa-phone"></i>+34 943 27 84 65</a>
                <a href="https://www.instagram.com/arzakrestaurant/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com/arzakrestaurant?lang=es"><i class="fa-brands fa-twitter"></i></a> 
            </div>
            <br><br>
            <!-- Formulario para cambiar colores -->
            <div class="form-colors">
                <form action="update-colors.php" method="post">
                    <div class="color-field">
                        <label for="mainColor">Color Primario:</label>
                        <input type="color" id="mainColor" name="mainColor" title="Color Principal" value="<?= $config->mainColor ?>"/>
                    </div>
                    <div class="color-field">
                        <label for="footerColor">Color de footer:</label>
                        <input type="color" id="footerColor" name="footerColor" title="Color de Footer" value="<?= $config->footerColor ?>"/>

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
            <div class="gallery js-flickity" data-flickity-options='{ "wrapAround":true, "pageDots": false, "autoPlay": true}'>
                <div class="gallery-cell" >
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
                <h2>Comidas exquistias para el paladar </h2>
                <p>"¡Sabor en Tres Tiempos, Placer en Cada Bocado!"</p>
                <button>Leer Más</button>
            </div>
        </div>

    </section>

    <!-- SECCION SABORES -->
    <section id="sabores">
        <h2>Sabores</h2>
        <div class="fila">
            <div class="item">
                <div class="icono">
                    <img src="img/sabor1.png" alt="">
                </div>
                <div class="info">
                    <h3>Ensaladas</h3>
                    <p>Crunch fresco, colores vibrantes, frescura saludable en cada hoja.</p>
                </div>
            </div>
            <div class="item">
                <div class="icono">
                    <img src="img/sabor2.png" alt="">
                </div>
                <div class="info">
                    <h3>Tortas</h3>
                    <p>Tierno deleite, dulce y esponjoso, fundiéndose en cada mordida.</p>
                </div>
            </div>
            <div class="item">
                <div class="icono">
                    <img src="img/sabor3.png" alt="">
                </div>
                <div class="info">
                    <h3>Hamburguesas</h3>
                    <p>Sabrosa explosión de carne, jugosidad y condimentos en cada bocado.</p>
                </div>
            </div>
        </div>

        <div class="fila">
            <div class="item">
                <div class="icono">
                    <img src="img/sabor4.png" alt="">
                </div>
                <div class="info">
                    <h3>Helados</h3>
                    <p>Fresco deleite cremoso, dulce frío que acaricia el paladar.</p>
                </div>
            </div>
            <div class="item">
                <div class="icono">
                    <img src="img/sabor5.png" alt="">
                </div>
                <div class="info">
                    <h3>Pastas</h3>
                    <p>Delicada pasta al dente, bañada en salsa, sabor reconfortante.</p>
                </div>
            </div>
            <div class="item">
                <div class="icono">
                    <img src="img/sabor6.png" alt="">
                </div>
                <div class="info">
                    <h3>Galletas</h3>
                    <p>Crujientes galletas, dulces tentaciones que endulzan el momento.</p>
                </div>
            </div>
        </div>

        <button>Ver Más</button>

    </section>

    <!-- SECCION PLATOS -->
    <section id="platos">
        <h2>Platos</h2>

        <div class="fila">
            <div class="item">
                <img src="img/plato1.jpg" alt="" width="363" height="242.47">
                <p>El kare</p>
            </div>
            <div class="item">
                <img src="img/plato2.jpg" alt="">
                <p>Carne de Picanha</p>
            </div>
            <div class="item">
                <img src="img/plato3.jpg" alt="">
                <p>Phanaeng Curry</p>
            </div>
        </div>
        <div class="fila">
            <div class="item">
                <img src="img/plato4.jpg" alt="">
                <p>Pollo a la brasa</p>
            </div>
            <div class="item">
                <img src="img/plato5.jpg" alt="">
                <p>Plato de Pizza con Rúcula</p>
            </div>
            <div class="item">
                <img src="img/plato6.jpg" alt="">
                <p>Plato de Pastas con Tuco</p>
            </div>
        </div>

        <button>Ver Más</button>

    </section>

    <!-- SECCION BLOG -->
    <section id="blog">
        <h2>Blog</h2>
        <div class="galeria-blog js-flickity" data-flickity-options='{ "wrapAround":true, "pageDots": true}'>
            <div class="gallery-cell" >
                <div class="item">
                    <div class="foto">
                        <img src="img/cheff1.jpg" alt="">
                    </div>
                    <div class="info">
                        <h3>El arte de las frutas</h3>
                        <p>El aguacate también ayudará a que caiga menos el pelo, todo gracias a sus grasas saludables, ácido omega 3 y vitaminas E y B.</p>
                    </div>
                </div>
            </div>
            <div class="gallery-cell" >
                <div class="item">
                    <div class="foto">
                        <img src="img/cheff2.jpg" alt="">
                    </div>
                    <div class="info">
                        <h3>Tratamientos prohibidos</h3>
                        <p>Aguas minerales de Perrier, Vittel y Cristaline, entre otras, son sometidas a tratamientos prohibidos por la normativa francesa.</p>
                    </div>
                </div>
            </div>
            <div class="gallery-cell" >
                <div class="item">
                    <div class="foto">
                        <img src="img/cheff3.jpg" alt="">
                    </div>
                    <div class="info">
                        <h3>Los beneficios de la inflacion</h3>
                        <p>Los gigantes de la industria alimentaria y la gran distribución son los beneficiados de la inflación.</p>
                    </div>
                </div>
            </div>
            <div class="gallery-cell" >
                <div class="item">
                    <div class="foto">
                        <img src="img/cheff4.jpg" alt="">
                    </div>
                    <div class="info">
                        <h3>Problemas con las frutas</h3>
                        <p>Pagamos el kilo de limones casi 10 veces su valor en el campo. Por cuarto mes consecutivo, esta fruta se coloca a la cabeza en el ranking de las diferencias de precio especulativas.</p>
                    </div>
                </div>
            </div>
        </div>
        <button>Leer Más</button>
    </section>

    <!-- SECCION CONTACTO Y PIE DE PAGINA -->
    <section id="contacto">
        <div class="fila">
            <div class="col">
                <h1>Trio Sabroso</h1>
            </div>
            <div class="col">
                <h3>Menú</h3>
                <a href="#inicio">Inicio</a>
                <a href="#sabores">Sabores</a>
                <a href="#sabores">Platos</a>
                <a href="#sabores">Blog</a>
            </div>
            <div class="col">
                <h3>Cheffs</h3>
                <a href="#">Unaica</a>
                <a href="#">Porti</a>
                <a href="#">Murua</a>
            </div>
            <div class="col">
                <h3>Social Media</h3>
                <div class="media">
                    <i class="fa-brands fa-twitter"></i> <a href="#">Twitter</a>
                </div>
                <div class="media">
                    <i class="fa-brands fa-instagram"></i> <a href="#">Instagram</a>
                </div>
            </div>
            <div class="col">
            <section id="contacto">
    <div class="fila">
        <div class="col-form">
            <h3>Comentario</h3>
            <form action="galdetegia.php" method="post">
                <label for="izena">Izena:</label><br>
                <input type="text" id="izena" name="izena" required><br><br>

                <label for="komentarioa">Komentarioa:</label><br>
                <textarea id="komentarioa" name="komentarioa" rows="4" cols="50" required></textarea><br><br>

                <input type="submit" value="Bidali">
            </form>
        </div>
        <div class="col-comments">
            <h3>Iruzkinak:</h3>
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