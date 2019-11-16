<?php
include "constantes.php";

if (isset ( $_GET ['search'] )) {
	$search = $_GET ['search'];
	
	$query = "SELECT * FROM Cim10 WHERE name like '%" . $search . "%'";
	
	$conn = new mysqli ( $servername, $username, $password, $dbname );
	
	$result = mysqli_query ( $conn, $query );
	
	$response = array ();
	while ( $row = mysqli_fetch_array ( $result ) ) {
		echo  $row ['code'] . $row ['name'] ;
	}
	

	
} else {
	
	echo 'blaireau y a pas de search';
}

exit ();

?>