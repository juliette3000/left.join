<?php

include "constantes.php";

$poids=$_POST["poids"];
$taille=$_POST["taille"];
$cim10=$_POST["cim10"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$now = date_create()->format('Y-m-d H:i:s');

$sql = "INSERT INTO medical (poids, taille, cim10, date) VALUES ("
    . $poids . "," . $taille . ",'" . $cim10 . "','" . $now . "');";
    
    echo $sql;
    
    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">window.location = "getListeMedical.php";</script>';
    } else {
        echo "erreur " . mysql_error();
    }
    
    $conn->close();
    ?>