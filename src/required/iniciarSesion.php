<!DOCTYPE html>
<html lang="es">

<head>
    <title>Formulario de Inicio de Sesión y Registro</title>
    <link rel="stylesheet" type="text/css" href="iniciarSesion.css">
</head>

<body>
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
            <li><a href="iniciarSesion.php" onclick="seleccionar()"><i class="fa-solid fa-sign-in"></i>Iniciar <br> Sesion</a></li>
        </ul>
    </nav>
    <center>
        <?php
        session_start();  // Asegurarse de que se inicia la sesión al comienzo del script.

        // Manejar cierre de sesión
        if (isset($_POST['action']) && $_POST['action'] === 'logout') {
            $_SESSION['usuario'] = "";  // Establecer usuario en sesión a una cadena vacía
            session_destroy();  // Destruir la sesión
            header("Location: index.php");  // Redirigir a la página de inicio de sesión
            exit;
        }

        require_once 'konexioa.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password']) && !isset($_POST['action'])) {
            // Recogemos los datos del formulario
            $usuarioa = $_POST['username'];
            $pasahitza = $_POST['password'];

            $conn = connection();

            // Preparamos la consulta SQL para obtener el hash de la contraseña
            $stmt = $conn->prepare("SELECT pasahitza FROM bezeroa WHERE usuarioa = ?");
            $stmt->bind_param("s", $usuarioa);
            $stmt->execute();
            $stmt->store_result();

            // Verificamos si se encontró el usuario
            if ($stmt->num_rows == 1) {
                $stmt->bind_result($hashed_password);
                $stmt->fetch();

                // Verificamos si la contraseña es correcta
                if (password_verify($pasahitza, $hashed_password)) {
                    $_SESSION['usuario'] = $usuarioa;  // Almacenar usuario en sesión
                    header("Location: index.php");  // Redirigir a otra página segura
                    exit;
                } else {
                    echo "<script>alert('Nombre de usuario o contraseña incorrectos.');</script>";
                }
            } else {
                echo "<script>alert('Nombre de usuario o contraseña incorrectos.');</script>";
            }

            $stmt->close();
            $conn->close();
        }
        ?>
        <div id="login-form">
            <h2>Iniciar Sesión</h2>
            <form method="post" action="iniciarSesion.php">
                <input type="text" name="username" id="login-username" placeholder="Nombre de usuario" required>
                <input type="password" name="password" id="login-password" placeholder="Contraseña" required>
                <button type="submit">Iniciar Sesión</button>
            </form>
        </div>

        <div id="register-form" style="display:none;">
            <h2>Registrarse</h2>
            <form method="post">
                <input type="text" name="username" placeholder="Nombre de usuario" required>
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="apellido1" placeholder="Primer apellido" required>
                <input type="text" name="apellido2" placeholder="Segundo apellido">
                <input type="text" name="nan" placeholder="DNI" required>
                <input type="number" name="telefonoa" placeholder="Telefonoa" required>
                <input type="email" name="email" placeholder="Correo electrónico" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <button type="submit">Registrarse</button>
            </form>
        </div>
        <form method="post">
                <input type="hidden" name="action" value="logout">
                <button type="submit">Cerrar Sesión</button>
            </form>
        <button id="switch-button">¿No tienes cuenta? Regístrate</button>
    </center>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts.js"></script>
    <script>
        $(document).ready(function() {
            $("#switch-button").click(function() {
                $("#login-form").toggle();
                $("#register-form").toggle();

                if ($("#login-form").is(":visible")) {
                    $("#switch-button").text("¿No tienes cuenta? Regístrate");
                } else {
                    $("#switch-button").text("¿Ya tienes cuenta? Inicia sesión");
                }
            });
        });
    </script>
</body>

</html>