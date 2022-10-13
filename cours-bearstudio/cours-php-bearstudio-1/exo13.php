<?php
echo"nombre", "\n";
$nombre = trim(fgets(STDIN));


if ( $nombre == 0){
    echo $nombre, " est égale à 0";
}


elseif ($nombre != 0){
    echo $nombre, " est différent de 0","\n";
 
    if ($nombre > 0){
        echo $nombre, " est supérieur à 0","\n";
    
     if ($nombre < 0){
        echo $nombre, " est inférieur à 0","\n";
     }
   
    if ($nombre >= 0){
    echo $nombre, " est supérieur ou égale a 0","\n";
 
    if ($nombre <= 0){
        echo $nombre, " est inférieur ou égale a 0","\n";
     }
 
}
}
}











?>