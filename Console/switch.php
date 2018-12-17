<?php
echo "1) Play\n";
echo "2) Parametre\n";
echo "3) Quitter\n";
$choix = readline("Faites votre choix : ");

switch($choix){
  case  1 :
    echo "Lancement du jeu";
    break;

  case 2 :
    echo "Parametre du jeu";
    break;

  case 3 :
    echo "Fin du GAME !!! ";
    break;

  default :
    echo "pas compris";
}

?>
