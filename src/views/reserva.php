<?php
require_once("header.php");  // Assuming header.php is in the same directory level or adjust the path as necessary
?>
<?php
    $usuarioBezeroa = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($usuarioBezeroa)) {
            // Usuario no está registrado o su sesión no está activa
            echo "<script>alert('Es necesario iniciar sesión para realizar la reserva.');</script>";
        } else {
            // Recogemos los datos del formulario
            $zenbatekoa = $_POST['zenbatekoa'];
            $ordua = $_POST['ordua'];
            $egoera = "Hasi gabe"; // Estado por defecto

            // Conexión a la base de datos
            require_once '../required/konexioa.php';
            $conn = connection();

            // Preparamos la consulta SQL para insertar la reserva
            $stmt = $conn->prepare("INSERT INTO erreserba (usuario_bezeroa, zenbatekoa, ordua, egoera) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $usuarioBezeroa, $zenbatekoa, $ordua, $egoera);

            if ($stmt->execute()) {
                echo "<script>alert('Reserva realizada con éxito.');</script>";
            } else {
                echo "<script>alert('Error al realizar la reserva: " . $stmt->error . "');</script>";
            }

            $stmt->close();
            $conn->close();
      }
}
?>
    <form method="post" id="reserva">
        <label for="zenbatekoa"><?= trans("Cantidad:") ?></label>
        <input type="number" name="zenbatekoa" id="zenbatekoa" required>

        <label for="ordua"><?= trans("Hora:") ?></label>
        <input type="time" name="ordua" id="ordua" required>

        <button type="submit" id="reserbakobotoia"><?= trans("Reservar") ?></button>
    </form>
    <?php
require_once("footer.php");  // Assuming header.php is in the same directory level or adjust the path as necessary
?>