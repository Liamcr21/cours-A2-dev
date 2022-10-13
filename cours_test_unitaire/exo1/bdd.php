<?php 

try{
    $db = new PDO ('mysql:host=localhost;dbname=cours_test_unitaire', 'root', '');

} catch (PDOException $e) {
    echo  'Erreur' . $e -> getMessage();
    die();
}


?>