<?php
include "constantes.php";

if (isset ( $_GET ['search'] )) {
	$search = $_GET ['search'];
	
	$query = "SELECT id, sexe, annee_naissance FROM enquete";
	
	$conn = new mysqli ( $servername, $username, $password, $dbname );
	
	$result = mysqli_query ( $conn, $query );
	
	echo '[';
	
	$isFirst = true;
	
	while ( $row = mysqli_fetch_array ( $result ) ) {
		if ($isFirst){
			echo  '{"id":"' . $row ['id'] . '","sexe":"' . $row ['sexe'] . ', "annee_naissance":"'. $row ['annee_naissance'] . '"}';
			$isFirst = false;
		}
		else {
		    echo  ',{"id":"' . $row ['id'] . '","sexe":"' . $row ['sexe'] . ', "annee_naissance":"'. $row ['annee_naissance'] . '"}';
		}
	}
	
	echo ']';
	
}
exit ();

?>