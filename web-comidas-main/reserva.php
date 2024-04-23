<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de reservas para comer y cenar</title>
    <link rel="stylesheet" type="text/css" href="reserva.css">
</head>

<body>
<form method="post">
    <label for="zenbatekoa">Cantidad:</label>
    <input type="number" name="zenbatekoa" id="zenbatekoa" required>

    <label for="ordua">Hora:</label>
    <input type="time" name="ordua" id="ordua" required>

    <button type="submit">Reservar</button>
</form>
</body>
</html>