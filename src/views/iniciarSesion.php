<?php
require_once("header.php");  // Assuming header.php is in the same directory level or adjust the path as necessary
?>

<center>
<?php
          

        // Manejar cierre de sesión
        if (isset($_POST['action']) && $_POST['action'] === 'logout') {
            $_SESSION['usuario'] = "";  // Establecer usuario en sesión a una cadena vacía
            session_destroy();  // Destruir la sesión
            header("Location: index.php");  // Redirigir a la página de inicio de sesión
            exit;
        }

        require_once '../required/konexioa.php';

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
            <h2><?= trans("Iniciar Sesion") ?></h2>
            <form method="post" action="iniciarSesion.php">
                <input type="text" name="username" id="login-username" placeholder=<?= trans("Nombre de usuario") ?> required>
                <input type="password" name="password" id="login-password" placeholder="<?= trans("Contraseña") ?>" required>
                <button id="botoia"type="submit"><?= trans("Iniciar Sesion") ?></button>
            </form>
        </div>

        <div id="register-form" style="display:none;">
            <h2><?= trans("Registrarse") ?></h2>
            <form method="post">
                <input type="text" name="username" placeholder="<?= trans("Nombre de usuario") ?>" required>
                <input type="text" name="nombre" placeholder="<?= trans("Nombre") ?>" required>
                <input type="text" name="apellido1" placeholder="<?= trans("Primer apellido") ?>" required>
                <input type="text" name="apellido2" placeholder="<?= trans("Segundo apellido") ?>">
                <input type="text" name="nan" placeholder="<?= trans("DNI") ?>" required>
                <input type="number" name="telefonoa" placeholder="<?= trans("Telefono") ?>" required>
                <input type="email" name="email" placeholder="<?= trans("Correo electronico") ?>" required>
                <input type="password" name="password" placeholder="<?= trans("Contraseña") ?>" required>
                <button id="botoia" type="submit"><?= trans("Registrarse") ?></button>
            </form>
        </div>
        <form method="post">
                <input type="hidden" name="action" value="logout">
                <button id="botoia" type="submit"><?= trans("Cerrar Sesion") ?></button>
            </form>
        <button id="switch-button" class="botoia"><?=trans("¿No tienes cuenta? Regístrate")?></button>
    </center>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts.js"></script>
    <script>
    $(document).ready(function() {
        $("#switch-button").click(function() {
            $("#login-form").toggle();
            $("#register-form").toggle();

            if ($("#login-form").is(":visible")) {
                $("#switch-button").text("<?=trans("¿No tienes cuenta? Regístrate")?>");
            } else {
                $("#switch-button").text("<?=trans("¿Ya tienes cuenta? Inicia sesión")?>");
            }
        });
    });
</script>

<?php
require_once("footer.php");  // Assuming header.php is in the same directory level or adjust the path as necessary
?>

