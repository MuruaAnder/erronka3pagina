<?php
// Define application directory relative to the server docu t root for easy access from any location.
define('APP_DIR', $_SERVER['DOCUMENT_ROOT'] . '/public/3.erronka/web-comidas-main');

define('HREF_SRC_DIR', '/public/3.erronka/web-comidas-main/src');
define('HREF_IMAGES', '/public/3.erronka/web-comidas-main/web-comidas-main/img');


// Load configuration from XML file and handle the case where the file cannot be loaded.
$configFile = APP_DIR . "/src/xml/conf.xml";
if (file_exists($configFile)) {
    $config = simplexml_load_file($configFile);
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

    <?php
} else {
    die("Failed to load configuration file.");
}

require_once (APP_DIR . "/src/language/translations.php");
?>

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
    <link rel="stylesheet" href="<?= HREF_SRC_DIR ?>/views/estilo.css ">
</head>

<body>
    <section id="inicio">

        <!-- Header and Navigation setup -->
        <header>
            <div class="contenido-header">
                <!-- Logo and navigation setup -->
                <div class="logo">
                    <img src="<?= HREF_IMAGES ?>/trio_sabroso_logo-transformed.png" alt="" width="300" height="175">
                </div>
                <?php
                // Start the session if not already started
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                $usuarioa = !empty($_SESSION['usuario']) ? $_SESSION['usuario'] : trans("Iniciar") . "<br>" . trans("Sesion");
                ?>
                <nav id="nav">
                    <ul>
                        <!-- Navigation items -->
                        <li><a href="<?= HREF_SRC_DIR ?>/views"><i class="fa-solid fa-house"></i><?= trans("Inicio") ?></a></li>
                        <li><a href="<?= HREF_SRC_DIR ?>/views/index.php#sabores"><i class="fa-solid fa-ice-cream"></i><?= trans("Sabores") ?></a></li>
                        <li><a href="<?= HREF_SRC_DIR ?>/views/index.php#platos"><i class="fa-solid fa-utensils"></i><?= trans("Platos") ?></a></li>
                        <li><a href="<?= HREF_SRC_DIR ?>/views/index.php#blog"><i class="fa-solid fa-pen"></i><?= trans("Blog") ?></a></li>
                        <li><a href="<?= HREF_SRC_DIR ?>/views/index.php#contacto"><i class="fa-solid fa-comments"></i><?= trans("Contacto") ?></a></li>
                        <li><a href="iniciarSesion.php"><i class="fa-solid fa-sign-in"></i><?= $usuarioa ?></a></li>
                    </ul>
                </nav>
                <div class="right-section">
                    <div class="social">
                        <a href="tel:+34 943 27 84 65"><i class="fa-solid fa-phone"></i>+34 943 27 84 65</a>
                        <a href="https://www.instagram.com/arzakrestaurant/"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://twitter.com/arzakrestaurant?lang=es"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                    <div class="language">
                        <?php require_once (APP_DIR . "/src/required/selectLang.php"); ?>
                    </div>
                    <!-- Color change form -->
                    <div class="form-colors">
                        <form action="../required/update-colors.php" method="post">
                            <div class="color-field">
                                <label for="mainColor"><?= trans("Color primario:") ?></label>
                                <input type="color" id="mainColor" name="mainColor" value="<?= $mainColor ?>" />
                            </div>
                            <div class="color-field">
                                <label for="footerColor"><?= trans("Color de footer:") ?></label>
                                <input type="color" id="footerColor" name="footerColor" value="<?= $footerColor ?>" />
                            </div>
                            <input type="submit" value="<?= trans("Actualizar") ?>">
                        </form>
                    </div>
                </div>
                <div class="nav-responsive" id="bar" onclick="mostrarOcultarMenu()">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
            <script src="<?= '../required/script.js' ?>"></script>
  
</body>
</header>