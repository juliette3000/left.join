<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap4.4.1.min.css" />
<link rel="stylesheet" href="css/samedi.css" />

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
$datenaiss = -1;


if (isset ( $_GET ['id'] )) {
	$id = $_GET ['id'];
	
	$query = "SELECT * FROM enquete WHERE id = " . $id;
	
	$conn = new mysqli ( $servername, $username, $password, $dbname );
	
	$result = mysqli_query ( $conn, $query );
	
	while ( $row = mysqli_fetch_array ( $result ) ) {
		$idNotFound = false;
		$datenaiss = $row ['annee_naissance'];
	    // echo  'datenaiss : ' . $row ['annee_naissance'];
		// echo  'sexe : ' . $row ['sexe'];
	}
	
} else {
	echo 'blaireau y a pas de id';
}

if ($idNotFound){
	echo "<h1>Erreur : aucune enquete avec l'id" . $id . "</h1>";
	exit ();
}

?>

	<form class="container" method="post" action="traitement.php">

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
							<input type="number" class="form-control" id="numerosiris">
						</div>
					</div>

					<div class="col-md-3">
						<label class="col-form-label">Sexe</label>
						<div>
							<div class="form-check form-check-inline">
								<input class="form-control" type="text" name="sexe" value="homme">
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<label for="datenaiss">Année de naissance</label>
						<input type="number" class="form-control" name="datenaiss" id="datenaiss"
							placeholder="format 19-- ou 20--" required="required" value="<?php echo $datenaiss ?>"/>

					</div>
					<div class="col-md-4">
						<label for="dateentree">Date d'entrée dans le centre (séjour actuel)</label> <input type="date" name="dateentree" id="dateentree" class="form-control" />
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-4">
						<label for="mode_entree">Mode d'admission au LAM</label>
						<input name="mode_entree" class="form-control" value="sss"/>
					</div>
					<div>
						<label for="autreentree" id="autreentreelabel" style="display: none">précisez </label>
						<input type="text" name="autreentree" id="autreentree" style="display: none; margin-top: 10px" />
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

				<div class="col-md-7" style="float: right;">
					<div class="alert alert-info alert-dismissible fade show" role="alert">

					</div>
				</div>
				<div style="clear: both;"></div>

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
		</div><!-- end card -->

		<div class="col-md-12" style="margin-bottom: 50px; text-align: center;">
			<a href="index.html" class="btn btn-info">Retour accueil</a>
		</div>
	</form>

	<script src="js/jquery-1.12.3.js" type="text/javascript"></script>

	<!-- pour afficher le champ de saisie autre -->
	<script type="text/javascript">
	</script>

</body>
</html>