<?php

include "constantes.php";

$poids=$_POST("poids");
$taille=$_POST("taille");
$codeCim10=$_POST("codeCim10");

$link  =  mysql_connect($servername, $username, $password) or die( "Impossible de se connecter : "  .  mysql_error ());

mysql_select_db($dbname);

// $sql = "INSERT INTO medical (poids, taille, codeCim10, info, date) VALUES (" . $poids . "," . $taille . "," . $codeCim10 . "," . $_SERVER['HTTP_REFERER'] . $now . ")";
$sql = "INSERT INTO medical (poids, taille, codeCim10) VALUES (" . $poids . "," . $taille . "," . $codeCim10 . ")";

$req = mysql_query($sql) or die("['Erreur SQL !','" .$sql. "','" . mysql_error() . "]");

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>