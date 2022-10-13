<?php


function add($nbr, $nbr2){
    $cal = ($nbr + $nbr2);
    return $cal;
}
function sous($nbr, $nbr2){
    $cal = ($nbr - $nbr2);
    return $cal;
}
function div($nbr, $nbr2){
    $cal = ($nbr / $nbr2);
    return $cal;
}
function mul($nbr, $nbr2){
    $cal = ($nbr * $nbr2);
    return $cal;
}

echo add(7,2) . PHP_EOL;
echo sous(10, 10) . PHP_EOL;
echo div(3, 6) . PHP_EOL;
echo mul(1, 2) . PHP_EOL;







?>