<?php
session_start();
// Manejar cierre de sesión
if (isset($_POST['action']) && $_POST['action'] === 'logout') {
    $_SESSION['usuario'] = "";  // Establecer usuario en sesión a una cadena vacía
    session_destroy();  // Destruir la sesión
    header("Location: ../views/index.php");  // Redirigir a la página de inicio de sesión
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
            header("Location: ../views/index.php");  // Redirigir a otra página segura
            exit;
        } else {
            $mensaje_error = "Nombre de usuario o contraseña incorrectos.";
        }
    } else {
        $mensaje_error = "Nombre de usuario o contraseña incorrectos.";
    }

    $stmt->close();
    $conn->close();
}
?>