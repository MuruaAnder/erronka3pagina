<?php
require_once("header.php");  // Assuming header.php is in the same directory level or adjust the path as necessary
?>

    <!-- Carrusel and other HTML content -->
    <div class="carrusel">
        <div class="gallery js-flickity" data-flickity-options='{ "wrapAround":true, "pageDots": false, "autoPlay": true}'>
            <div class="gallery-cell">
                <img src="<?= HREF_IMAGES ?>/1.jpg" alt="">
            </div>
            <div class="gallery-cell">
                <img src="<?= HREF_IMAGES ?>/2.jpg" alt="">
            </div>
            <div class="gallery-cell">
                <img src="<?= HREF_IMAGES ?>/3.jpg" alt="">
            </div>
            <div class="gallery-cell">
                <img src="<?= HREF_IMAGES ?>/4.jpg" alt="">
            </div>
        </div>
        <div class="info">
            <h2><?= trans("Comidas exquisitas para el paladar!") ?></h2>
            <p><?= trans("¡Sabor en Tres Tiempos, Placer en Cada Bocado!") ?></p>
            <button><a href="reserva.php"><?= trans("Haz tu reserva") ?></a></button>
        </div>
    </div>

    </section>
    <!-- SECCION SABORES -->
    <section id="sabores">
        <h2><?= trans("Sabores") ?></h2>
        <div class="fila">
            <div class="item">
                <div class="icono">
                    <img src="img/sabor1.png" alt="">
                </div>
                <div class="info">
                    <h3><?= trans("Ensladas") ?></h3>
                    <p><?= trans("Crunch fresco, colores vibrantes, frescura saludable en cada hoja.") ?></p>
                </div>
            </div>
            <div class="item">
                <div class="icono">
                    <img src="img/sabor2.png" alt="">
                </div>
                <div class="info">
                    <h3><?= trans("Tortas") ?></h3>
                    <p><?= trans("Tierno deleite, dulce y esponjoso, fundiéndose en cada mordida.") ?></p>
                </div>
            </div>
            <div class="item">
                <div class="icono">
                    <img src="img/sabor3.png" alt="">
                </div>
                <div class="info">
                    <h3><?= trans("Hamburguesas") ?></h3>
                    <p><?= trans("Sabrosa explosión de carne, jugosidad y condimentos en cada bocado.") ?></p>
                </div>
            </div>
        </div>

        <div class="fila">
            <div class="item">
                <div class="icono">
                    <img src="img/sabor4.png" alt="">
                </div>
                <div class="info">
                    <h3><?= trans("Helados") ?></h3>
                    <p><?= trans("Fresco deleite cremoso, dulce frío que acaricia el paladar.") ?></p>
                </div>
            </div>
            <div class="item">
                <div class="icono">
                    <img src="img/sabor5.png" alt="">
                </div>
                <div class="info">
                    <h3><?= trans("Pastas") ?></h3>
                    <p><?= trans("Delicada pasta al dente, bañada en salsa, sabor reconfortante.") ?></p>
                </div>
            </div>
            <div class="item">
                <div class="icono">
                    <img src="img/sabor6.png" alt="">
                </div>
                <div class="info">
                    <h3><?= trans("Galletas") ?></h3>
                    <p><?= trans("Crujientes galletas, dulces tentaciones que endulzan el momento.") ?></p>
                </div>
            </div>
        </div>

        <button><?= trans("Ver más") ?></button>

    </section>

    <!-- SECCION PLATOS -->
    <section id="platos">
        <h2><?= trans("Platos") ?></h2>

        <div class="fila">
            <div class="item">
                <img src="img/plato1.jpg" alt="" width="363" height="242.47">
                <p><?= trans("El kare") ?></p>
            </div>
            <div class="item">
                <img src="img/plato2.jpg" alt="">
                <p><?= trans("Carne de Picanha") ?></p>
            </div>
            <div class="item">
                <img src="img/plato3.jpg" alt="">
                <p>Phanaeng Curry</p>
            </div>
        </div>
        <div class="fila">
            <div class="item">
                <img src="img/plato4.jpg" alt="">
                <p><?= trans("Pollo a la brasa") ?></p>
            </div>
            <div class="item">
                <img src="img/plato5.jpg" alt="">
                <p><?= trans("Plato de Pizza con rucula") ?></p>
            </div>
            <div class="item">
                <img src="img/plato6.jpg" alt="">
                <p><?= trans("Plato de pastas con tuco") ?></p>
            </div>
        </div>

        <button><?= trans("Ver más") ?></button>

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
                        <h3><?= trans("El arte de las frutas") ?></h3>
                        <p><?= trans("El aguacate también ayudará a que caiga menos el pelo, todo gracias a sus grasas saludables,
                            ácido omega 3 y vitaminas E y B.") ?></p>
                    </div>
                </div>
            </div>
            <div class="gallery-cell">
                <div class="item">
                    <div class="foto">
                        <img src="img/cheff2.jpg" alt="">
                    </div>
                    <div class="info">
                        <h3><?= trans("Tratamientos prohibidos") ?></h3>
                        <p><?= trans("Aguas minerales de Perrier, Vittel y Cristaline, entre otras, son sometidas a tratamientos
                            prohibidos por la normativa francesa.") ?></p>
                    </div>
                </div>
            </div>
            <div class="gallery-cell">
                <div class="item">
                    <div class="foto">
                        <img src="img/cheff3.jpg" alt="">
                    </div>
                    <div class="info">
                        <h3><?= trans("Los beneficios de la inflacion") ?></h3>
                        <p><?= trans("Los gigantes de la industria alimentaria y la gran distribución son los beneficiados de la
                            inflación.") ?></p>
                    </div>
                </div>
            </div>
            <div class="gallery-cell">
                <div class="item">
                    <div class="foto">
                        <img src="img/cheff4.jpg" alt="">
                    </div>
                    <div class="info">
                        <h3><?= trans("Problemas con las frutas") ?></h3>
                        <p><?= trans("Pagamos el kilo de limones casi 10 veces su valor en el campo. Por cuarto mes consecutivo,
                            esta fruta se coloca a la cabeza en el ranking de las diferencias de precio especulativas.") ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <button><?= trans("Leer más") ?></button>
    </section>
    <?php
require_once("footer.php");  // Assuming header.php is in the same directory level or adjust the path as necessary
?>