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
            $footer2Color = shadeColor($footerColor, 0.05);
            $config->footer2Color = $footer2Color;

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


 function shadeColor($color, $percent) {
    $color = str_replace("#", "", $color);
    $t=$percent<0?0:255;
    $p=$percent<0?$percent*-1:$percent;
    $RGB = str_split($color, 2);
    $R=hexdec($RGB[0]);
    $G=hexdec($RGB[1]);
    $B=hexdec($RGB[2]);
    return '#'.substr(dechex(0x1000000+(round(($t-$R)*$p)+$R)*0x10000+(round(($t-$G)*$p)+$G​)*0x100+(round(($t-$B)*$p)+$B)),1);
}

?>
