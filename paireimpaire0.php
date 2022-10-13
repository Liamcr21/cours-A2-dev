

<?php


function pair($nbr)
{
    if ($nbr % 2 == 0){ 
    return ("pair");
}
    else{
    return ("impaire");
}

}

function check($a , $b){
    if ($a == $b){
        return("succes");
    }
    else {
        return("failed");
    }
    
    
}

echo check("pair", pair(10)) . PHP_EOL;
echo check("impaire", pair(1)) . PHP_EOL;
echo check("impaire", pair(0)) . PHP_EOL;




?>