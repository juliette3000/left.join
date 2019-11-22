<!DOCTYPE html>
<html lang="fr" prefix="og: http://ogp.me/ns#">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Yann Abd-el-Kader"> 
	<meta name="description" content="requêtes SQL avancées sur base athlétisme"> 
	<meta name="keyword" content="SQL athlétisme requêtes avancées"> 
	<meta property="og:title" content="SQL athlétisme requêtes avancées" />

	<link href="css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
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

		<div class="col-sm-2"></div>

		<div class="col-sm-8">


			<table class="table table-striped table-bordered table-hover table-condensed" id="table_records_pays_sel"></table>
		</div>
	</div>
</article>

	<script type="text/javascript">

		
	var records = { data : [
		

	<?php
	include "constantes.php";

	$query = "SELECT id, sexe, annee_naissance FROM enquete";

	$conn = new mysqli ( $servername, $username, $password, $dbname );

	$result = mysqli_query ( $conn, $query );


	$isFirst = true;

	while ( $row = mysqli_fetch_array ( $result ) ) {
		if ($isFirst){
			echo  '{"id":"<a href=enquete.php?id=' . $row ['id'] . '>' . $row ['id'] . '</a>","sexe":"' . $row ['sexe'] . '", "annee_naissance":"'. $row ['annee_naissance'] . '"}';
			$isFirst = false;
		}
		else {
			echo  ',{"id":"<a href=enquete.php?id=' . $row ['id'] . '>' . $row ['id'] . '","sexe":"' . $row ['sexe'] . '", "annee_naissance":"'. $row ['annee_naissance'] . '"}';
		}
	}
	
?>

	]};
		
	var table = $('#table_records_pays_sel').DataTable({
		data : records.data,
		"order": [[ 2, "asc" ]],
	       "paging": false, 
	       "info": false,         
	  columns : [
	    { data: 'id', title: 'id' },
	    { data: 'sexe', title: 'sexe' },
	    { data: 'annee_naissance', title: 'annee_naissance' },    
	     ]  
	});
	
	</script>
</body>
</html>

<?php
exit ();
?>