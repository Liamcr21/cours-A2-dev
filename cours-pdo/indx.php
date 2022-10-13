<?php 

require_once('bdd.php');

$sql = 'SELECT * FROM magasin WHERE adresse ';

$query = $db -> prepare($sql);

$query -> execute();

$result = $query->fetchAll(PDO :: FETCH_ASSOC);
 foreach ($result as $row) {
    echo $row['adresse'];
 }

?>