<?php
function connection()
{
    // Datos de la base de datos del servidor
    $servername = "192.168.15.82:3306";
    $username = "3taldea";
    $password = "1WMG2023";
    $dbname = "erronkadb";

    // Datos de la base de datos local
    // $servername = "localhost"; 
    // $username = "root"; 
    // $password = "1WMG2023";  
    // $dbname = "erronkadb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Conexion fallida: " . $conn->connect_error);
    }

    return $conn;
}
?>
