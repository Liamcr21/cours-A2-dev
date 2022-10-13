<?php

echo"Indiquez la température de l'eau de votre robinet", "\n";

$nombre = trim(fgets(STDIN));

if ($nombre <= 0){
    echo"L'eau a un etat solide", "\n";
}

elseif (('0' < $nombre) && ( $nombre < '100')) {
    echo"L'eau a un etat liquide", "\n";
    }

else{
    echo"L'eau a un etat gazeux";
}

?>