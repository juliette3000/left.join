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


if (!isset ( $_GET ['id'] )) {
	echo 'blaireau y a pas de id';
}
$id = $_GET ['id'];
$sql = "SELECT * FROM medical WHERE id = " . $id;

$link  =  mysql_connect($servername, $username, $password) or die( "Impossible de se connecter : "  .  mysql_error ());

mysql_select_db($dbname);

$result = mysql_query($sql) or die("['Erreur SQL !','" .$sql. "','" . mysql_error() . "]");

while($row = mysql_fetch_assoc($result)){
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
					<label class="col-form-label">Poids (kg):</label>
					<input type="number" class="form-control" name="poids" id="poids" value="<?php echo $poids ?>" readonly="readonly"/>
				</div>
				<div class="col-md-2">
					<label class="col-form-label">Taille (cm):</label>
					<input type="number" class="form-control" name="taille" id="taille" value="<?php echo $taille ?>" readonly="readonly" />
				</div>
			</div>

			<br/><br/>

			<div class="row">
				<div class="col-md-12">
					<div class="titre">Pathologies présentes au moment de l'enquête</div>
				</div>
				<div class="col-md-4">


                    <label class="col-form-label">cim10</label>
                    <input type="text" class="form-control" readonly="readonly" value="<?php echo $cim10 ?>"/>
				</div>

				<div class="col-md-2">
					<label class="col-form-label">date</label>
					<input type="text" class="form-control" readonly="readonly" value="<?php echo $date ?>"/>
				</div>

			</div>
		</div>
	</div>
	
</div>

	<script src="js/jquery-1.12.3.js" type="text/javascript"></script>

</body>
</html>