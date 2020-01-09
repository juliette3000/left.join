<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/bootstrap4.4.1.min.css" />
	<link rel="stylesheet" href="css/formulaire.css" />

	<link rel="manifest" href="/manifest.json">
	
	<title>Confirmation</title>

</head>

<body>

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

?>
	<form class="container" method="post" action="save_social_confirmation.php">			

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
							<input readonly="readonly" type="number" class="form-control" value="<?php echo $numerosiris ?>">
						</div>
					</div>

					<div class="col-md-3">
						<label>Sexe</label>
						<input name="sexe" readonly="readonly" class="form-control" value="<?php echo $sexe ?>"/>
					</div>

					<div class="col-md-3">
						<label for="annee_naissance">Année de naissance</label>
						<input readonly="readonly" type="number" class="form-control" name="annee_naissance" id="annee_naissance" required="required" value="<?php echo $annee_naissance ?>"/>
					</div>
					<div class="col-md-4">
						<label for="date_entree">Date d'entrée dans le centre (séjour actuel)</label>
						<input readonly="readonly" type="text" name="date_entree"  value="<?php echo $date_entree ?>" class="form-control" />
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-4">
						<label for="mode_admission">Mode d'admission au LAM</label>
						<input readonly="readonly" type="text" name="mode_admission" value="<?php echo $mode_admission ?>" class="form-control"/>
					</div>
					<div class="col-md-4">
						<label>Autre</label>
						<input readonly="readonly" type="text" name="mode_admission_autre" value="<?php echo $mode_admission_autre ?>" class="form-control"/>
					</div>
				</div>
			</div>
		</div>
	
		<div class="card" id="card2">
			<div class="card-header">Données médico-sociales de la personne acceuillie</div>
			<div class="card-body">
				<div class="form-group row">
					<div class="col-md-4">
						<label>Statut administratif</label>
						<input name="statut_admin" readonly="readonly" class="form-control" value="<?php echo $statut_admin ?>"/>
					</div>
					<div class="col-md-4">
						<label>Couverture sociale</label>
						<input name="couv_sociale" readonly="readonly" class="form-control" value="<?php echo $couv_sociale ?>"/>
					</div>
					<div class="col-md-4">
						<label>Couverture sociale complémentaire</label>
						<input name="couv_socialec" readonly="readonly" class="form-control" value="<?php echo $couv_socialec ?>"/>
					</div>
				</div>
			</div>
		</div>

		<div class="card" id="card3">
			<div class="card-header">Cette personne a-t-elle ou pourrait elle bénéficier</div>
			<div class="card-body">
				<div class="form-group row">
					<div class="col-md-4">
						<label>D'une AAH ?</label>
						<input name="aah" readonly="readonly" class="form-control" value="<?php echo $aah ?>"/>
					</div>
					<div class="col-md-4">
						<label>D'une PCH ?</label>
						<input name="pch" readonly="readonly" class="form-control" value="<?php echo $pch ?>"/>
					</div>
					<div class="col-md-4">
						<label>D'une pension d'invalidité ?</label>
						<input name="invalidite" readonly="readonly" class="form-control" value="<?php echo $invalidite ?>"/>
					</div>
				</div>
			</div>
		</div>

		<div class="card" id="card4">
			<div class="card-header">Cette personne a-t-elle ou pourrait elle bénéficier</div>
			<div class="card-body row">
<input name="mdph" readonly="readonly" class="form-control" value="<?php echo $mdph ?>"/>
<input name="mdphsavs" readonly="readonly" class="form-control" value="<?php echo $mdphsams ?>"/>
<input name="mdphsams" readonly="readonly" class="form-control" value="<?php echo $mdphsams ?>"/>
<input name="aidesocialefam" readonly="readonly" class="form-control" value="<?php echo $aidesocialefam ?>"/>
<input name="aidesocialesavs" readonly="readonly" class="form-control" value="<?php echo $aidesocialesavs ?>"/>
<input name="aidesocialesams" readonly="readonly" class="form-control" value="<?php echo $aidesocialesams ?>"/>

<input name="precisionmdph" readonly="readonly" class="form-control" value="<?php echo $precisionmdph ?>"/>
<input name="precisionmdphbis" readonly="readonly" class="form-control" value="<?php echo $precisionmdphbis ?>"/>
<input name="precisionmdphter" readonly="readonly" class="form-control" value="<?php echo $precisionmdphter ?>"/>

			</div>

		</div>

		<div class="card" id="card5">
			<div class="card-header">Cette personne a-t-elle ou pourrait elle bénéficier</div>
			<div class="card-body row">
<input name="ehpad" readonly="readonly" class="form-control" value="<?php echo $ehpad ?>"/>
<input name="aidesocialeehpad" readonly="readonly" class="form-control" value="<?php echo $aidesocialeehpad ?>"/>
<input name="placeehpad" readonly="readonly" class="form-control" value="<?php echo $placeehpad ?>"/>
			</div>
		</div>

		<div class="card" id="card6">
			<div class="card-header">Existe t'il une protection juridique</div>
			<div class="card-body">
<input name="protection" readonly="readonly" class="form-control" value="<?php echo $protection ?>"/>
<input name="precisionprotection" readonly="readonly" class="form-control" value="<?php echo $precisionprotection ?>"/>
			</div>
		</div>

		<div class="col-md-12" style="margin-bottom: 50px; text-align: center;">
			Etes vous sûr d'enregistrer ces données ? <button type="submit" class="btn btn-info">Confirmer</button>
			<button type="button" class="btn btn-secondary" onclick="window.history.back();">Annuler</button>
		</div>	
			
	</form>
</body>