<?php  
$nom = '';
if (isset($_POST['nom']))
{
	$nom = $_POST['nom'];
}
	include 'constantes.php';
	// Create connection http://php.net/manual/fr/function.mysql-connect.php
	
	// 	$link  =  mysql_connect($servername, $username, $password) or die( "Impossible de se connecter : "  .  mysql_error ()); // version 5
	
	
	$conn = new mysqli($servername, $username, $password, $dbname); // php version 7 en local
	// Check connection
	if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
	
	$sql = "INSERT INTO enquete (nom) VALUES ('$nom')";

	
	if ($conn->query($sql) === TRUE) 
		{	echo $nom . " a bien été enregistré !" ;
			}



 	else {
    echo "Error: " . $sql . "<br>" . $conn->error;}

$conn->close();
?>
	

	
	
	
	



