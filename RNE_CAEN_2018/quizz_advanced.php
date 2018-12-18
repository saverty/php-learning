<?php
$q1 = readline("Combien font 2 x 2 : ");
$q2 = readline("Combien font 3 x 2 : ");
$q3 = readline("Combien font 4 x 2 : ");

$resultat = 0; 

if($q1 == 4){
    $resultat++;
}

if($q2 == 6){
    $resultat++;
}

if($q3 == 8){
    $resultat++;
}
$pourcentage = round($resultat / 3 * 100, 2);

echo "Vous avez $resultat bonnes réponses \n";
echo "Vous avez $pourcentage % de bonnes réponses";




