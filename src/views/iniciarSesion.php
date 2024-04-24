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

