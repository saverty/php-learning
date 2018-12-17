<?php

/**
*Fonction pour faire des additions
*Cette fonction prend 2 parametres (nombre1 et nombre2) qui sont les 2 chiffres quenous allons additionner
**/
function afficherMenu(){
  //Affichage du menu
  echo "1) addition\n";
  echo "2) soustration\n";
  echo "3) multiplication\n";
  echo "4) division\n";
}
function operation($choix, $nombre1, $nombre2){
  switch ($choix) {
    case 1:
      $resultat = addition($nombre1, $nombre2);
      break;

    case 2:
      $resultat = soustraction($nombre1, $nombre2);
      break;

    case 3:
      $resultat = multiplication($nombre1, $nombre2);
      break;

    case 4:
      $resultat = division($nombre1, $nombre2);
      break;

    default:
      $resultat = "Une erreur est survenue";
      break;
  }
  return $resultat;
}
function addition($nombre1, $nombre2){
  $resultat = $nombre1 + $nombre2;
  return $resultat;
}

function soustraction($nombre1, $nombre2){
  $resultat = $nombre1 - $nombre2;
  return $resultat;
}

function multiplication($nombre1, $nombre2){
  $resultat = $nombre1 * $nombre2;
  return $resultat;
}

function division($nombre1, $nombre2){
  $resultat = $nombre1 / $nombre2;
  return $resultat;
}


afficherMenu();

$choix = readline("Taper le chiffre correspondant au menu : ");

$nombre1 = readline("Premier nombre : ");
$nombre2 = readline("Deuxieme nombre : ");

echo "Le resultat est : ".operation($choix,$nombre1, $nombre2);

?>
