<!DOCTYPE html>
<html lang="fr" prefix="og: http://ogp.me/ns#">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="css/dataTables.bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
	
	<script src="js/jquery-1.12.3.js" type="text/javascript"></script>
	<script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<link rel="manifest" href="/manifest.json">
	
	<title>Confirmation</title>

</head>

<body>

	<article class="content">

		<div class="col-sm-2"></div>

		<div class="col-sm-8">

			<table class="table table-striped table-bordered table-hover table-condensed" id="table_records_pays_sel"></table>
			

<form class="container" method="post" action="save_social_confirmation.php">			
	
<?php  
$annee_naissance = null;

if (isset($_POST['annee_naissance'])) {
	$annee_naissance = $_POST['annee_naissance'];
	
	if($annee_naissance == ''){
		$annee_naissance = null;
	}
}



echo 'annee_naissance<input type="text" name="annee_naissance" value="'. $annee_naissance . '"/><br/>';

if (isset($_POST['departementmdph'])) {
	$departementmdph= $_POST['departementmdph'];
	
	if($departementmdph == ''){
	}
		$departementmdph = '-1';
}
echo 'departementmdph<input type="text" name="departementmdph" value="' . $departementmdph . '"/><br/>';



?>
	
sexe<input type="text" name="sexe" value="FFFF"/><br/>
date_entree<input type="text" name="date_entree" value=""/><br/>
mode_admission<input type="text" name="mode_admission" value=""/><br/>
droits<input type="text" name="droits" value=""/><br/>
<input type="text" name="couv" value=""/><br/>
<input type="text" name="couvc" value=""/><br/>
<input type="text" name="aah" value=""/><br/>
<input type="text" name="pch" value=""/><br/>
<input type="text" name="inv" value=""/><br/>
<input type="text" name="mdph" value=""/><br/>
<input type="text" name="mdphsavs" value=""/><br/>
<input type="text" name="mdphsams" value=""/><br/>
<input type="text" name="aidesocialefam" value=""/><br/>
<input type="text" name="aidesocialesavs" value=""/><br/>
<input type="text" name="aidesocialesams" value=""/><br/>
		
<input type="text" name="precisionmdph" value=""/><br/>
<input type="text" name="precisionmdphbis" value=""/><br/>
<input type="text" name="precisionmdphter" value=""/><br/>
<input type="text" name="ehpad" value=""/><br/>
<input type="text" name="aidesocialeehpad" value=""/><br/>
<input type="text" name="placeehpad" value=""/><br/>
<input type="text" name="protection" value=""/><br/>
<input type="text" name="precisionprotection" value=""/>





					
			<button type="submit" class="btn btn-info">Etes vous sûr d enregistrer ces données</button>
			
			
</form>
		</div>
	</article>

	
	
</body>
	
	
	
	



