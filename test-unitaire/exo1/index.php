<?php 

require_once('bdd.php');

$sql = 'INSERT INTO test_unitaire (id, prenom, nom,content) VALUES (NULL, "liam","cariou","woooo")';

$query = $db->prepare($sql);
$query->execute();




?>