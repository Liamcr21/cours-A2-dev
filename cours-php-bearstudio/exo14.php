<?php

echo"Votre age", "\n";

$nombre = trim(fgets(STDIN));

if ($nombre >= 18 ){
    echo"Je suis majeur", "\n";
}


else{
    echo"Je suis mineur";
}

?>