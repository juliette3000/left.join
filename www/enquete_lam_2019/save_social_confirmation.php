<?php  

$numerosiris			= $_POST['annee_naissance'];
$sexe					= $_POST['sexe'];
$annee_naissance		= $_POST['annee_naissance'];
$date_entree			= $_POST['date_entree'];
$mode_admission			= $_POST['mode_admission'];
$mode_admission_autre	= $_POST['mode_admission_autre'];
$statut_admin			= $_POST['statut_admin'];
$couv_sociale			= $_POST['couv_sociale'];
$couv_socialec			= $_POST['couv_socialec'];
$aah					= $_POST['aah'];
$pch					= $_POST['pch'];
$invalidite				= $_POST['invalidite'];
$mdph					= $_POST['mdph'];
$mdphsavs				= $_POST['mdphsavs'];
$mdphsams				= $_POST['mdphsams'];
$aidesocialefam			= $_POST['aidesocialefam'];
$aidesocialesavs		= $_POST['aidesocialesavs'];
$aidesocialesams		= $_POST['aidesocialesams'];

$precisionmdph			= $_POST['precisionmdph'];
$precisionmdphbis		= $_POST['precisionmdphbis'];
$precisionmdphter		= $_POST['precisionmdphter'];
$ehpad					= $_POST['ehpad'];
$aidesocialeehpad		= $_POST['aidesocialeehpad'];
$placeehpad				= $_POST['placeehpad'];
$protection				= $_POST['protection'];
$precisionprotection	= $_POST['precisionprotection'];

$departement_mdph = '-1';

if (isset($_POST['departement_mdph'])) {
	$departement_mdph= $_POST['departement_mdph'];
	if($departement_mdph == ''){
		$departement_mdph = '-1';
	}
}

if (isset($_POST['mode_admission_autre'])) {
	$mode_admission_autre = $_POST['mode_admission_autre'];
	
	if($mode_admission_autre == ''){
		$mode_admission_autre = null;
	}
}
	
include 'constantes.php';

$conn = new mysqli($servername, $username, $password, $dbname); // php version 7 en local
// Check connection
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

$sql = "INSERT INTO social (  sexe,    annee_naissance,    date_entree,	   mode_admission,	 mode_admission_autre,     statut_admin, 	  couv_sociale,    couv_socialec,    aah,   pch,    invalidite,  accord_mdph_fam, accord_mdph_savs, accord_mdph_samsah,	aide_soc_fam,		aide_soc_savs,		aide_soc_samsah,	departement_mdph, situation_recherche_place, date_demande, nombre_refus, derogation_age_ehpad, aide_soc_ehpad, situation_place_ehpad, protection_juridique, protection_juridique_precision)
VALUES 					   ('$sexe', '$annee_naissance', '$date_entree', '$mode_admission', '$mode_admission_autre', '$statut_admin',	'$couv_sociale', '$couv_socialec', '$aah','$pch', '$invalidite', '$mdph',		'$mdphsavs',		'$mdphsams',		'$aidesocialefam',	'$aidesocialesavs',	'$aidesocialesams','$departement_mdph','$precisionmdph',			'$precisionmdphbis',		'$precisionmdphter','$ehpad ',		'$aidesocialeehpad',		'$placeehpad',		'$protection',	'$precisionprotection' )";

if ($conn->query($sql) === TRUE){
	echo '<script type="text/javascript">window.location = "getListeSocial.php";</script>';
}
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
}	
	

	
$conn->close();
?>



