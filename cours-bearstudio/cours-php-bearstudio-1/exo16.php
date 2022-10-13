<?php

echo"Vous êtes un garcon ou une fille",  "\n","Repondez garcon ou fille","\n";

$genre = trim(fgets(STDIN));

if ($genre == "garcon" ){
    echo"Je suis un garcon", "\n";
}

else{
    echo"Je suis une fille";
}

?>