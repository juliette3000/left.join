<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<link href="css/styleJuliette.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>

<?php

$servername = "sql.free.fr";
$username = "left.join";
$password = "XXXXXXX";
$dbname = "left_join";
 

// Create connection http://php.net/manual/fr/function.mysql-connect.php

$link  =  mysql_connect($servername, $username, $password) or die( "Impossible de se connecter : "  .  mysql_error ());

mysql_select_db($dbname);

$sql = " SELECT num_id, secu FROM tronc_commun LIMIT 100;";


$req = mysql_query($sql) or die("['Erreur SQL !','" .$sql. "','" . mysql_error() . "]");

$nb = mysql_num_rows($req);

if ( $nb == 0 ) {
	// rien à faire

} else {
	// on fait une boucle qui va faire un tour pour chaque enregistrement
	while($row = mysql_fetch_assoc($req)){
		
            echo $row[0] . ' ' . $row[1] . '<br/>';

	}
} 


mysql_close();

?>


</body>
</html>
