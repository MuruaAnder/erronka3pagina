<?php
// Verificar que el método de solicitud sea POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recuperar los colores del formulario
    $mainColor = isset($_POST['mainColor']) ? $_POST['mainColor'] : null;
    $footerColor = isset($_POST['footerColor']) ? $_POST['footerColor'] : null;

    if ($mainColor && $footerColor) {
        // Cargar el archivo XML
        $xmlFile = 'conf.xml';
        if (file_exists($xmlFile)) {
            $config = simplexml_load_file($xmlFile);
            if ($config === false) {
                echo "Error al cargar el archivo XML.";
                exit;
            }

            // Actualizar los colores en el archivo XML
            $config->mainColor = $mainColor;
            $config->footerColor = $footerColor;

            // Guardar los cambios en el archivo XML
            $result = $config->asXML($xmlFile);
            if ($result) {
                echo "Colores actualizados con éxito.";
            } else {
                echo "Error al guardar los cambios en el archivo XML.";
            }
        } else {
            echo "Archivo de configuración no encontrado.";
        }
    } else {
        echo "Datos de color no proporcionados.";
    }
} else {
    // Método no permitido
    echo "Método no permitido. Debe ser POST.";
}

 header('Location: index.php');
?>
