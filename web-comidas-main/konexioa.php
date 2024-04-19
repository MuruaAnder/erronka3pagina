<?php
function connection() {

    //SERVIDOREKO DATU BASEA
     $servername = "192.168.15.82:3306"; 
     $username = "3taldea"; 
     $password = "1WMG2023";
     $dbname = "erronkadb";
    
    // LOCALEKO DATU BASEA
    //$servername = "localhost"; 
    //$username = "root"; 
    //$password = "1WMG2023";  
    //$dbname = "erronkadb";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Errorea: " . $conn->connect_error);
    }

    return $conn;
}
?>