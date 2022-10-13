<?php 

try{
    $db = new PDO ('mysql:host=localhost;dbname=cours-pdo', 'root', '');

} catch (PDOException $e) {
    echo  'Erreur' . $e -> getMessage();
    die();
}


?>