<?php

/*
*TP
*Afficher les jours de la semaine
*/

/********************************************SOLUTION 1 : SANS TABLEAU****************************/
/*************************************************************************************************/
/*************************************************************************************************/
echo "\nSOLUTION 1 SANS TABLEAU:\n\n";

//Je recupere le nombre de jours dans une semaine
$nombreDeJours = 7;

//Je boucle 7 fois pour afficher les 7 jours de la semaine
for($i = 0; $i < 7; $i++){

  //J'ajoute 1 car mon itération commence a 0 est le jours 0 n'existe pas
  $numeroJours = $i+1;

  //Si le jours = 1 cela signifie que nous sommes lundi, si les jours = 2 nous sommes mardi etc ...
  switch ($numeroJours) {

    //Si le numero du jours est 1 alors nous sommes lundi
    case 1:
      $jours = "lundi";
      break;

    //Si le numero du jours est 2 alors nous sommes mardi etc...
    case 2:
      $jours = "mardi";
      break;

    case 3:
      $jours = "mercredi";
      break;

    case 4:
      $jours = "jeudi";
      break;

    case 5:
      $jours = "vendredi";
      break;

    case 6:
      $jours = "samedi";
      break;

    case 7:
      $jours = "dimanche";
      break;
  }

  //J'affiche le numero du jours ainsi que le jours.
  echo "Le jours ".$numeroJours." de la semaine est le ".$jours."\n";

  //Si i est inferrieur a 7 alors je n'ai pas ecrit tout les jours de la semaine donc je reste dans la boucle
}
//Si i n'est pas inferrieur a 7 alors je sors de ma boucle.


/********************************************SOLUTION 2 : AVEC UN TABLEAU****************************/
/*************************************************************************************************/
/*************************************************************************************************/

echo "\nSOLUTION 2 : AVEC UN TABLEAU\n\n";

//Je crée un tableau avec tout les jours de la semaine
$semaine = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi" ,"dimanche");

//Pour i=0, tant que i est inferrieur a la taille de mon tableau c'est a dire 7 (le nombre de jours dans une semaine) je reste dans ma boucle et
// a chaque boucle j'augmente i de 1 ;
for ($i = 0; $i < sizeof($semaine); $i++) {

  //Vu que i commence a 0 et que le jours 0 n'existe pas, j'ajoute 1 .
  $numeroJours = $i+1;

  /*Si nous sommes lundi, nous sommes a la premiere boucle donc i = 0.
  *si je veux recuperer lundi il faut quue je prenne l'element 0 de mon tableau

  *Si nous sommes mardi, nous sommes a la deuxieme boucle donc i = 1.
  *si je veux recuperer mardi il faut quue je prenne l'element 1 de mon tableau

  *ATTENTION : le premier element d'un tableau est a l'index 0 et non a 1 !!!
  */

  //Je recupere ma journée
  $jours = $semaine[$i];

  //J'affiche le resultat
  echo "Le jours ".$numeroJours." de la semaine est le ".$jours."\n";
}

?>
