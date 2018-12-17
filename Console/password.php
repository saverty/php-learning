<?php

$identifiant = "steve";
$motDePasse = "toto1234";

$acces = false;
$nombreTentative = 1;

echo "========= SECURITY =========\n";
while($acces == false && $nombreTentative < 4){
  echo "tentative ".$nombreTentative." : ";
  $tentativeIdentifiant = readline("Veuillez entrer un identifiant : ");
  $tentativeMotDePasse = readline("Veuillez entrer un mot de passe : ");

  if($tentativeIdentifiant == $identifiant && $motDePasse == $tentativeMotDePasse){
    echo "Connection OK \n";
    $acces = true;
  }
  else{
    echo "Acces interdit \n";
    $nombreTentative++;
  }
}


?>
