<?php  
$param_lhss = '';
if (isset($_POST['lhss']))
{
	$param_lhss = $_POST['lhss'];
}
else {
	echo "param [lhss] manquant";
	exit;
}
if (empty($param_lhss)){
	
	echo "param [lhss] est vide ";
	exit;
}


	include 'constantes.php';

	// Create connection http://php.net/manual/fr/function.mysql-connect.php
	
	$link  =  mysql_connect($servername, $username, $password)
	or die( "Impossible de se connecter : "  .  mysql_error ());
	
	mysql_select_db($dbname);
	
	
	$sql = "SELECT annee as 


?>