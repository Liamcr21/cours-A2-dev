

<?php

echo"Un nombre", "\n";

$nombre = (int)trim(fgets(STDIN));


function check($nombre){
    if($nombre % 2 ){
        echo "Paire"; 
    }
    else{
        echo "Impaire";
    }
}
  
check($nombre)





/*
function pair ($nbr)
{
    if ($nbr % 2 ==0)
    return ("pair");
    return ("impaire");

}

echo pair(10) . PHP_EOL;
echo pair(1) . PHP_EOL;
echo pair(0) . PHP_EOL;
*/
?>




