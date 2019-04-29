<?php

while(true){
    echo "1) Addition \n";
    echo "2) Soustraction \n";
    echo "3) Multiplication \n";
    echo "4) Division \n";

    $choix = readline('Tapez votre choix ');
    $chiffre1 = readline('Chiffre 1 : ');
    $chiffre2 = readline('Chiffre 2 : ');

    if($choix == 1){
        $resultat = $chiffre1 + $chiffre2;
        echo "Le resultat : $resultat";
    }

    if($choix == 2){
        $resultat = $chiffre1 - $chiffre2;
        echo "Le resultat : $resultat";}

    if($choix == 3){
        $resultat = $chiffre1 * $chiffre2;
        echo "Le resultat : $resultat";
    }

    if($choix == 4){
        $resultat = $chiffre1 / $chiffre2;
        echo "Le resultat : $resultat";
    }
}