<?php

include "constantes.php";

$poids=$_POST["poids"];
$taille=$_POST["taille"];
$codeCim10=$_POST["codeCim10"];
$now = date("m.d.y");

$sql = "INSERT INTO medical (poids, taille, codeCim10, date) VALUES ("
    . $poids . "," . $taille . ",'" . $codeCim10 . "','" . $now . "');";

$link  =  mysql_connect($servername, $username, $password) or die( "Impossible de se connecter : "  .  mysql_error ());
    
mysql_select_db($dbname);
    

if(!mysql_query($sql)) die(mysql_error());
    
echo '<script type="text/javascript">window.location = "getListeMedical.php";</script>';

mysql_close();
?>