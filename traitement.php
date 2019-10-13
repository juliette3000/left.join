<?php  
$param_lhss = '';
if (isset($_POST['lhss']))
{
	$param_lhss = $_POST['lhss'];
}


	include 'constantes.php';


	// Create connection http://php.net/manual/fr/function.mysql-connect.php

	
	// 	$link  =  mysql_connect($servername, $username, $password) or die( "Impossible de se connecter : "  .  mysql_error ()); // version 5
	
	
	$conn = new mysqli($servername, $username, $password, $dbname); // php version 7 en local
	// Check connection
	if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
	
	$sql = "SELECT id, nom FROM resident";

	
	
	$result = $conn->query($sql);
	
	// if ($result->num_rows > 0) {
	
	// OLD if ( $nb == 0 ) {
	if ($result->num_rows == -1) {
		// rien à faire
	}
	else {
		// on fait une boucle qui va faire un tour pour chaque enregistrement
		// OLD while($row = mysql_fetch_assoc($req)){
		while($row = $result->fetch_assoc()) {
				echo $row["id"] . ' -  nom : ' . $row["nom"] ;

		}
	}
	
	
	
	
	
?>
