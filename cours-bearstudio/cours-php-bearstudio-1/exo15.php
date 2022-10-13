<?php

echo"Vous êtes en diplome d'informatique", "\n","Repondez oui ou non","\n";

$ecole = trim(fgets(STDIN));

if ($ecole == "oui" ){
    echo"Oui a la nws", "\n";
}

else{
    echo"non au chomage";
}

?>