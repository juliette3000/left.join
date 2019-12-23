<?php

include "constantes.php";

$poids=$_POST("poids");
$taille=$_POST("taille");
$codeCim10=$_POST("codeCim10");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$now = date_create()->format('Y-m-d H:i:s');

$sql = "INSERT INTO medical (poids, taille, codeCim10, info, date) VALUES ("
    . $poids . "," . $taille . "," . $codeCim10 . "," . $_SERVER['HTTP_REFERER'] . $now . ")";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>