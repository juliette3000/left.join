<?php  

$datenaiss = '';
if (isset($_POST['datenaiss']))
{
	$datenaiss = $_POST['datenaiss'];
	echo $datenaiss. " a bien été enregistré !" ;	
	
}


include 'constantes.php';
// Create connection http://php.net/manual/fr/function.mysql-connect.php

// 	$link  =  mysql_connect($servername, $username, $password) or die( "Impossible de se connecter : "  .  mysql_error ()); // version 5


$conn = new mysqli($servername, $username, $password, $dbname); // php version 7 en local
// Check connection
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

$sql = "INSERT INTO enquete (sexe, annee_naissance, date_entree, mode_admission, statut_admin, couv_sociale, couv_socialec, aah, pch, invalidite, accord_mdph_fam, accord_mdph_savs, accord_mdph_samsah, aide_soc_fam, aide_soc_savs, aide_soc_samsah, departement_mdph, situation_recherche_place, date_demande, nombre_refus, derogation_age_ehpad, aide_soc_ehpad, situation_place_ehpad, protection_juridique, protection_juridique_precision, mode_admission_autre) VALUES ('h', '$datenaiss','2010-01-01','tt','uu','ii','aa','rr','bb','xx','ii','ll','qq','i','k','p','94','p','2018-01-01','9','kk','hh','cc','pp','m','j'  )";


if ($conn->query($sql) === TRUE)
{	echo $datenaiss. " a bien été enregistré !" ;
}



else {
	echo "Error: " . $sql . "<br>" . $conn->error;}
	
	$conn->close();
	

?>
	


	
	
	
	



