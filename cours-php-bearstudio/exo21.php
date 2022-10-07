<?php


echo"Ecrivez un nombre ", "\n";
$i = 1;
$a = 0;
$text = "";
$nbr = trim(fgets(STDIN));



 while($i <= $nbr){

    $a = $a + $i ;
    if ($i != $nbr){
        echo $i . " + ";
    }
    else {
        echo $i;
    }
    

    $i++;
 }
 
 echo " = $a";

?>