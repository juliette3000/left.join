<?php
include "constantes.php";

if (isset ( $_GET ['search'] )) {
	$search = $_GET ['search'];
	
	$query = "SELECT * FROM Cim10 WHERE name like '%" . $search . "%'";
	
	$conn = new mysqli ( $servername, $username, $password, $dbname );
	
	$result = mysqli_query ( $conn, $query );
	
	$response = array ();
	
	echo '[';
	
	$isFirst = true;
	
	while ( $row = mysqli_fetch_array ( $result ) ) {
		if ($isFirst){
		    echo  '{"id":"' . $row ['code'] . '","tagName":"' . $row ['name'] . ' ('. $row ['code'] . ')"}';
			$isFirst = false;
		}
		else {
		    echo  ',{"id":"' . $row ['code'] . '","tagName":"' . $row ['name'] . ' ('. $row ['code'] . ')"}';
		}
	}
	
	echo ']';
	
} else {
	
	echo 'blaireau y a pas de search';
}

exit ();

?>