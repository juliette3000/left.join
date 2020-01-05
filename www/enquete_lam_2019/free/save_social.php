<!DOCTYPE html>
<html lang="fr" prefix="og: http://ogp.me/ns#">
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
$annee_naissance = null;

if (isset($_POST['annee_naissance'])) {
	$annee_naissance = $_POST['annee_naissance'];
	
	if($annee_naissance == ''){
		$annee_naissance = null;
	}
}

$sexe = null;
if (isset($_POST['sexe'])) {
	$sexe = $_POST['sexe'];
}


$date_entree = $_POST['date_entree'];


if (isset($_POST['departementmdph'])) {
	$departementmdph= $_POST['departementmdph'];
	
	if($departementmdph == ''){
	}
		$departementmdph = '-1';
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
							<input readonly="readonly" type="number" class="form-control" value="<?php echo numerosiris ?>">
						</div>
					</div>

					<div class="col-md-3">
						<label>Sexe</label>
						<input readonly="readonly" class="form-control" value="<?php echo $sexe ?>"/>
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
					<div>
						<input readonly="readonly" type="text" name="autreentree" value="<?php echo $autreentree ?>" class="form-control"/>
					</div>
				</div>
			</div>
		</div>
	
		<div class="card" id="card2">
			<div class="card-header">Données médico-sociales de la personne acceuillie</div>
			<div class="card-body">
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
			Etes vous sûr d'enregistrer ces données ? <button type="submit" class="btn btn-info">Confirmer</button>
			<button type="button" class="btn btn-secondary" onclick="window.history.back();">Annuler</button>
		</div>	
			
	</form>
</body>