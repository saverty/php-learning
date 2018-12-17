<?php

/**
* BOUCLES while
* Objectif : Faire un limitateur de vitesse
**/

//J'initialise le compteur de la voiture a l'arret donc 0km/h
$compteur = 0;

//Je joue 10 fois
for($nombreEssai = 0; $nombreEssai < 9; $nombreEssai++){

  //Je demande a l'utilisateur a quelle vitesse il veut aller
  $vitesseDesiree = readline("A quelle vitesse dois je rouler ?\n ");

  //Tant que le compteur n'est pas égal a la vitesse desiree on on repete le code a l'interrieur de la boucle while
  while($compteur != $vitesseDesiree){

    //Si la vitese est inferrieur a la vitesse desirée, on augmente la vitesse
    if($compteur < $vitesseDesiree){
      $compteur++;
    }
    //Sinon on diminue la vitesse
    else{
      $compteur--;
    }

    //J'affiche la vitesse de a laquelle je suis
    echo "La vitesse est de : ".$compteur." km/h\n";

    //Je met le programme en pause pendant 1 seconde
    sleep(1);
  }

  //Je suis sorti de la boucle, cela signifie que je suis a la vitesse désirée
  echo "Vous etes a la vitesse desiree\n";
}

?>
