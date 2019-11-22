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

$sql = "INSERT INTO medical (poids, taille, codeCim10) VALUES (" . $poids . "," . $taille . "," . $codeCim10 .")";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>