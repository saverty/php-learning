<?php

$postalCode = readline('Votre code postal : ');

if($postalCode >= 14000 && $postalCode <= 14999){
    echo "Tu es dans le calvados";
}

elseif($postalCode >= 50000 && $postalCode <= 50999){
    echo "Tu es dans la manche, désolé.";
}

else{
    echo "Je sais pas où tu es";
}