<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap4.4.1.min.css" />

<style type="text/css">
.form-group {
	padding: 0 20px;
}

* {
	font-size: 0.95rem;
}

.card {
	margin-bottom: 50px;
}
</style>

<title>Enquête LAM</title>
</head>
<body>
<?php
include "constantes.php";

$idNotFound = true;

if (!isset ( $_GET ['id'] )) {
	echo 'blaireau y a pas de id';
	exit();
}
	
$id = $_GET ['id'];
	
$sql = "SELECT * FROM social WHERE id = " . $id;
	
$link  =  mysql_connect($servername, $username, $password) or die( "Impossible de se connecter : "  .  mysql_error ());

mysql_select_db($dbname);

$result = mysql_query($sql) or die("['Erreur SQL !','" .$sql. "','" . mysql_error() . "]");

while($row = mysql_fetch_assoc($result)){
	$idNotFound = false;
	$sexe					= $row ['sexe'];
	$annee_naissance		= $row ['annee_naissance'];
	$date_entree			= $row ['date_entree'];
	
	// ci dessous TODO corriger les colonnes inexistantes
	$mode_admission			= $row ['mode_admission'];
	$statut_admin					= $row ['statut_admin'];
	$couv					= $row ['couv'];
	$couvc					= $row ['couvc'];
	$aah					= $row ['aah'];
	$pch					= $row ['pch'];
	$inv					= $row ['inv'];
	$mdph					= $row ['mdph'];
	$mdphsavs				= $row ['mdphsavs'];
	$mdphsams				= $row ['mdphsams'];
	$aidesocialefam			= $row ['aidesocialefam'];
	$aidesocialesavs		= $row ['aidesocialesavs'];
	$aidesocialesams		= $row ['aidesocialesams'];
	
	$precisionmdph			= $row ['precisionmdph'];
	$precisionmdphbis		= $row ['precisionmdphbis'];
	$precisionmdphter		= $row ['precisionmdphter'];
	$ehpad					= $row ['ehpad'];
	$aidesocialeehpad		= $row ['aidesocialeehpad'];
	$placeehpad				= $row ['placeehpad'];
	$protection				= $row ['protection'];
	$precisionprotection	= $row ['precisionprotection'];
	
	// colonnes existantes
	$statut_admin			= $row ['statut_admin'];
	$couv_sociale			= $row ['couv_sociale'];
}

if ($idNotFound){
	echo "<h1>Erreur : aucune enquete volet social avec l'id" . $id . "</h1>";
	exit ();
}

?>

	<div class="container">

		<div class="d-flex justify-content-center" style="margin-top: 30px">
			<div class="card">
				<div class="card-header">Enquête flash sur les situations de handicap-novembre 2019
					<div style="text-align: center;">Volet social</div>
				</div>
			</div>
		</div>			

		<div class="card" id="card1">
			<div class="card-header">Données civiles de la personne accueillie</div>
			<div class="card-body">	



				<div class="form-group row">
					<div class="col-md-2">
						<label for="numerosiris" class="col-form-label">Numéro (auto)</label>
						<div>
							<input readonly="readonly" type="number" class="form-control" value="<?php echo numerosiris ?>">
						</div>
					</div>

					<div class="col-md-3">
						<label>Sexe</label>
						<input readonly="readonly" class="form-control" value="<?php echo $sexe ?>"/>
					</div>

					<div class="col-md-3">
						<label for="annee_naissance">Année de naissance</label>
						<input readonly="readonly" type="number" class="form-control" name="annee_naissance" value="<?php echo $annee_naissance ?>"/>
					</div>
					<div class="col-md-4">
						<label for="date_entree">Date d'entrée dans le centre (séjour actuel)</label>
						<input readonly="readonly" type="date" name="date_entree"  value="<?php echo $date_entree ?>" class="form-control" />
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-4">
						<label for="mode_admission">Mode d'admission au LAM</label>
						<input readonly="readonly" type="text" name="mode_admission" value="<?php echo $mode_admission ?>" class="form-control"/>
					</div>
					<div class="col-md-4">
						<label>Autre</label>
						<input readonly="readonly" type="text" name="autreentree" value="<?php echo $autreentree ?>" class="form-control"/>
					</div>
				</div>
			</div>
		</div>
	
		<div class="card" id="card2">
			<div class="card-header">Données médico-sociales de la personne accueillie</div>
			<div class="card-body">
				<div class="form-group row">
					<div class="col-md-4">
						<label class="col-form-label">Statut administratif</label>
						<input readonly="readonly" type="text" value="<?php echo $statut_admin ?>" class="form-control"/>
					</div>
					<div class="col-md-4">
						<label class="col-form-label">Couverture sociale</label>
						<input readonly="readonly" type="text" value="<?php echo $couv_sociale ?>" class="form-control"/>
					</div>
				</div>
			</div>
		</div>

		<div class="card" id="card3">
			<div class="card-header">Cette personne a-t-elle ou pourrait elle bénéficier</div>
			<div class="card-body">

			</div>
		</div>

		<div class="card" id="card4">
			<div class="card-header">Cette personne a-t-elle ou pourrait elle bénéficier</div>
			<div class="card-body row">

			</div>

		</div>

		<div class="card" id="card5">
			<div class="card-header">Cette personne a-t-elle ou pourrait elle bénéficier</div>
			<div class="card-body row">
			</div>
		</div>

		<div class="card" id="card6">
			<div class="card-header">Existe t'il une protection juridique</div>
			<div class="card-body">
			</div>
		</div>

		<div class="col-md-12" style="margin-bottom: 50px; text-align: center;">
			<a href="accueil.html" class="btn btn-info">Retour accueil</a>
		</div>
	</div>

	<script src="js/jquery-1.12.3.js" type="text/javascript"></script>

</body>
</html>