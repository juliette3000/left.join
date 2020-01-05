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
$datenaiss = -1;


if (!isset ( $_GET ['id'] )) {
    echo 'id not found';
    exit;
}
$id = $_GET ['id'];

$query = "SELECT * FROM medical WHERE id = " . $id;

$conn = new mysqli ( $servername, $username, $password, $dbname );

$result = mysqli_query ( $conn, $query );

while ( $row = mysqli_fetch_array ( $result ) ) {
    $idNotFound = false;
    $poids = $row ['poids'];
    $taille = $row ['taille'];
    $cim10 = $row ['cim10'];
    $date = $row ['date'];
}

if ($idNotFound){
    echo "<h1>Erreur : aucune enquete volet medical avec l'id" . $id . "</h1>";
    exit ();
}

?>
<div class="container" >

	<div class="d-flex justify-content-center" style="margin-top: 30px">
		<div class="card">
			<div class="card-header">Enquête flash sur les situations de handicap-novembre 2019
				<div style="text-align: center;">Volet médical</div>
			</div>
		</div>
	</div>			

	<div class="card">
		<div class="card-header">Données médicales de la personne accueillie</div>
		<div class="card-body">
		
			<div class="row">
				<div class="col-md-2">
					<label for="Poids" class="col-form-label">Poids (kg):</label>
					<input type="number" class="form-control" name="poids" id="poids" required="required" />
				</div>
				<div class="col-md-2">
					<label for="Poids" class="col-form-label">Taille (cm):</label>
					<input type="number" class="form-control" name="taille" id="taille" value="<?php echo $taille ?>" />
				</div>
			</div>

			<div class="row">

				<div class="col-md">
					<div class="titre">Motifs d'entrée au LAM</div>
				</div>

				<div class="col-md">

					<div class="titre">Pathologies présentes au moment de l'enquête</div>

<div>
poids <?php echo $poids ?>
</div>
<div>
taille 
</div>
<div>
cim10 <?php echo $cim10 ?>
</div>
<div>
date <?php echo $date ?>
</div>

				</div>

			</div>
		</div>
	</div>
	
</div>

	<script src="js/jquery-1.12.3.js" type="text/javascript"></script>

</body>
</html>