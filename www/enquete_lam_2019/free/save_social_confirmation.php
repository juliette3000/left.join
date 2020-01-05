<?php  

$autreentree = null;
$departementmdph = null;

if (isset($_POST['autreentree'])) {
	$autreentree = $_POST['autreentree'];
	
	if($autreentree == ''){
		$autreentree = null;
	}
}
	
if (isset($_POST['departementmdph'])) {
	$departementmdph = $_POST['departementmdph'];

	if($departementmdph == ''){
		$departementmdph = null;
	}
}

if (isset($_POST['sexe'])
	&& isset($_POST['annee_naissance'])
	&& isset($_POST['date_entree'])
	&& isset($_POST['mode_admission'])
	&& isset($_POST['statut_admin'])
	&& isset($_POST['couv'])
	&& isset($_POST['couvc'])
	&& isset($_POST['aah'])
	&& isset($_POST['pch'])
	&& isset($_POST['inv'])
	&& isset($_POST['mdph'])
	&& isset($_POST['mdphsavs'])
	&& isset($_POST['mdphsams'])
	&& isset($_POST['aidesocialefam'])
	&& isset($_POST['aidesocialesavs'])
	&& isset($_POST['aidesocialesams'])
	
	&& isset($_POST['precisionmdph'])
	&& isset($_POST['precisionmdphbis'])
	&& isset($_POST['precisionmdphter'])
	&& isset($_POST['ehpad'])
	&& isset($_POST['aidesocialeehpad'])
	&& isset($_POST['placeehpad'])
	&& isset($_POST['protection'])
	&& isset($_POST['precisionprotection'])
	) {
	$sexe					= $_POST['sexe'];
	$annee_naissance				= $_POST['annee_naissance'];
	$date_entree				= $_POST['date_entree'];
	$mode_admission			= $_POST['mode_admission'];
	$statut_admin					= $_POST['statut_admin'];
	$couv					= $_POST['couv'];
	$couvc					= $_POST['couvc'];
	$aah					= $_POST['aah'];
	$pch					= $_POST['pch'];
	$inv					= $_POST['inv'];
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
	
}
else {
	// TODO : si on veut interdire l'enregistrement avec valeurs manquantes, brancher le exit()
	// echo "erreur valeurs manquantes : ... ";
	// exit();
	
	$sexe					= $_POST['sexe'];
	$annee_naissance		= $_POST['annee_naissance'];
	$date_entree			= $_POST['date_entree'];
	$mode_admission			= $_POST['mode_admission'];
	$statut_admin					= $_POST['statut_admin'];
	$couv					= $_POST['couv'];
	$couvc					= $_POST['couvc'];
	$aah					= $_POST['aah'];
	$pch					= $_POST['pch'];
	$inv					= $_POST['inv'];
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
}


include 'constantes.php';

$sql = "INSERT INTO social (  sexe,    annee_naissance,    date_entree,	   mode_admission,	 mode_admission_autre, 	statut_admin, 	couv_sociale, couv_socialec, aah,	pch,	invalidite, accord_mdph_fam, accord_mdph_savs, accord_mdph_samsah,	aide_soc_fam,		aide_soc_savs,		aide_soc_samsah,	departement_mdph, situation_recherche_place, date_demande, nombre_refus, derogation_age_ehpad, aide_soc_ehpad, situation_place_ehpad, protection_juridique, protection_juridique_precision) 
VALUES 					   ('$sexe', '$annee_naissance', '$date_entree', '$mode_admission', '$autreentree',        '$statut_admin',		'$couv',	'$couvc',		'$aah','$pch',	'$inv',		'$mdph',		'$mdphsavs',		'$mdphsams',		'$aidesocialefam',	'$aidesocialesavs',	'$aidesocialesams','$departementmdph','$precisionmdph',			'$precisionmdphbis',		'$precisionmdphter','$ehpad ',		'$aidesocialeehpad',		'$placeehpad',		'$protection',	'$precisionprotection' )";


$link  =  mysql_connect($servername, $username, $password) or die( "Impossible de se connecter : "  .  mysql_error ());

mysql_select_db($dbname);


if(!mysql_query($sql)) die(mysql_error());


echo '<script type="text/javascript">window.location = "getListeSocial.php";</script>';

mysql_close();
?>