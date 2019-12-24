<!DOCTYPE html>
<html lang="fr" prefix="og: http://ogp.me/ns#">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

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

	$sql = "SELECT * FROM medical";

	mysql_connect($servername, $username, $password) or die( "Impossible de se connecter : "  .  mysql_error ());
	mysql_select_db($dbname);

	$result = mysql_query($sql) or die("['Erreur SQL !','" .$sql. "','" . mysql_error() . "]");

	$isFirst = true;

	while($row = mysql_fetch_assoc($result)){
		if ($isFirst){
		    echo  '{"id":"<a href=medical.php?id=' . $row ['id'] . '>' . $row ['id'] . '</a>","poids":"' . $row ['poids'] . '", "taille":"' . $row ['taille'] . '", "cim10":"'. $row ['cim10'] . '", "date":"' . $row ['date'] . '"}';
			$isFirst = false;
		}
		else {
		    echo ',{"id":"<a href=medical.php?id=' . $row ['id'] . '>' . $row ['id'] . '</a>","poids":"' . $row ['poids'] . '", "taille":"' . $row ['taille'] . '", "cim10":"'. $row ['cim10'] . '", "date":"' . $row ['date'] . '"}';
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
	    { data: 'cim10', title: 'cim10' },
	    { data: 'date', title: 'date' }    
	     ]  
	});
	
	</script>
</body>
</html>

<?php
exit ();
?>