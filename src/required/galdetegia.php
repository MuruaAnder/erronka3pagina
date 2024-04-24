<?php
// Comprueba si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $izena = $_POST['izena'];
    $komentarioa = $_POST['komentarioa'];
    $data = date('Y-m-d'); // Obtiene la fecha actual

    // Ruta al archivo XML
    $archivo_xml = '../xml/iruzkinak.xml';

    // Carga el archivo XML existente o crea uno nuevo si no existe
    if (file_exists($archivo_xml)) {
        $xml = simplexml_load_file($archivo_xml);
        if ($xml === false) {
            die("Errorea XML fitxategia kargatzean.");
        }
    } else {
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><iruzkinak></iruzkinak>');
    }

    // Añadir un nuevo comentario
    $komentario_berria = $xml->addChild('iruzkina');
    $komentario_berria->addChild('izena', htmlspecialchars($izena));
    $komentario_berria->addChild('data', $data);
    $komentario_berria->addChild('komentarioa', htmlspecialchars($komentarioa));

    // Guardar el XML modificado
    $xml->asXML($archivo_xml);
    echo "Komentarioa zuzen gorde da.";

    // Redireccionar de vuelta a index.php
    header('Location: ../views/index.php');
    exit;
} else {
    echo "Iruzkin berriak bidaltzeko formularioa erabili.";
}
?>

