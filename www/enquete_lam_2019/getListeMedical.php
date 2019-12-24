<!DOCTYPE html>
<html lang="fr" prefix="og: http://ogp.me/ns#">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Yann Abd-el-Kader"> 
	<meta name="description" content="requ�tes SQL avanc�es sur base athl�tisme"> 
	<meta name="keyword" content="SQL athl�tisme requ�tes avanc�es"> 
	<meta property="og:title" content="SQL athl�tisme requ�tes avanc�es" />

	<link href="css/bootstrap3.3.6.min.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="css/dataTables.bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
	
	<script src="js/jquery-1.12.3.js" type="text/javascript"></script>
	<script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<link rel="manifest" href="/manifest.json">
	
	<title>Enquêtes</title>

</head>

<body>


	<article class="content">

		<div class="col-sm-10">
			<nav style="float: right;"><a href="accueil.html">accueil</a></nav>
		</div>

		<div style="clear: both;"> </div>

		<div class="col-sm-2"></div>

		<div class="col-sm-8">

			<h1>Enquêtes médical</h1>

			<table class="table table-striped table-bordered table-hover table-condensed" id="table_medical"></table>
		</div>
	</div>
</article>

	<script type="text/javascript">

		
	var records = { data : [
		

	<?php
	include "constantes.php";

	$query = "SELECT id, poids, taille, codeCim10, date FROM medical";

	$conn = new mysqli ( $servername, $username, $password, $dbname );

	$result = mysqli_query ( $conn, $query );


	$isFirst = true;

	while ( $row = mysqli_fetch_array ( $result ) ) {
		if ($isFirst){
			echo  '{"id":"<a href=medical.php?id=' . $row ['id'] . '>' . $row ['id'] . '</a>","poids":"' . $row ['poids'] . '", "codeCim10":"'. $row ['codeCim10'] . '"}';
			$isFirst = false;
		}
		else {
			echo  ',{"id":"<a href=medical.php?id=' . $row ['id'] . '>' . $row ['id'] . '","poids":"' . $row ['poids'] . '", "codeCim10":"'. $row ['codeCim10'] . '"}';
		}
	}
	
?>

	]};
		
	var table = $('#table_medical').DataTable({
		data : records.data,
		"order": [[ 2, "asc" ]],
	       "paging": false, 
	       "info": false,         
	  columns : [
	    { data: 'id', title: 'id' },
	    { data: 'poids', title: 'poids' },
	    { data: 'taille', title: 'taille' },
	    { data: 'codeCim10', title: 'codeCim10' },    
	     ]  
	});
	
	</script>
</body>
</html>

<?php
exit ();
?>