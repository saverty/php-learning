<?php

$codepin = 1234; 
$solde = 500; 
$tentative = 3; 
$access = false; 

while($tentative > 0 && $access == false ){
    $tentativeCodePin = readline('Tapez votre code : ');

    if($tentativeCodePin == $codepin){
        $access = true;
    }

    else{
        $tentative--;
    }
}

if($access == true){
    $montant = readline('Choisir le montant : ');
    
    if($montant <= $solde){
        echo "Voici vos $montant";
    }
    else{
        echo "Vous n'avez pas assez d'argent";
    }

}
else{
    echo "Carte bloquée";
}
