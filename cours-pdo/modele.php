<?php 

require_once('bdd.php');

$sql = 'SELECT * FROM user WHERE adress_mail LIKE "%gmail%';
$sql = 'SELECT * FROM user WHERE adress_mail LIKE "%outlook%';

$query = $db -> prepare($sql);

$query -> execute();

$result = $quer->fetchAll(PDO :: FETCH_ASSOC);
 foreach ($result as $row) {
    echo $row['id'];
 }

?>