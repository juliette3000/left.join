<?php
include "constantes.php";

if (isset ( $_GET ['search'] )) {
    $search = $_GET ['search'];
    
    $sql = "SELECT * FROM Cim10 WHERE name like '%" . $search . "%'";
    
    $link  =  mysql_connect($servername, $username, $password) or die( "Impossible de se connecter : "  .  mysql_error ());
    
    mysql_select_db($dbname);

    $req = mysql_query($sql) or die("['Erreur SQL !','" .$sql. "','" . mysql_error() . "]");
    
    $nb = mysql_num_rows($req);

    echo '[';
    
    if ( $nb == 0 ) {
        // rien à faire
        
    } else {
        $isFirst = true;
        while($row = mysql_fetch_assoc($req)){
            if ($isFirst){
                echo  '{"id":"' . $row ['code'] . '","tagName":"' . $row ['name'] . ' ('. $row ['code'] . ')"}';
                $isFirst = false;
            }
            else {
                echo  ',{"id":"' . $row ['code'] . '","tagName":"' . $row ['name'] . ' ('. $row ['code'] . ')"}';
            }
        }
    }
    
    echo ']';
    
} else {
    
    echo 'blaireau y a pas de search';
}

exit ();

?>