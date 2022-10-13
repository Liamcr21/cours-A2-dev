
<?php

echo"Un nombre", "\n";

$nombre = (int)trim(fgets(STDIN));
$i = 0;

while ( $i <=10){
    $r = $nombre*$i;

echo $nombre, " x " , $i , " = ", $r, "\n";

$i++;
}
?>