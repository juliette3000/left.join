<?php

include "constantes.php";

if(isset($_POST['search'])){
 $search = $_POST['search'];

 $query = "SELECT * FROM Cim10 WHERE nom like'%".$search."%'";
 $result = mysqli_query($con,$query);

 $response = array();
 while($row = mysqli_fetch_array($result) ){
   $response[] = array("code"=>$row['code'],"nom"=>$row['nom']);
 }

 echo json_encode($response);
}

exit;

?>