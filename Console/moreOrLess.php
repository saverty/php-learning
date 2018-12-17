<?php

$fin = false;
$chiffre = rand( 1,10);
$vie = 1;
while($fin == false && $vie < 4){
  $choix = readline('Choisissez un chiffre : ');

  if ($choix > $chiffre){
    echo "C'est plus petit \n";
    $vie++;
  }
  elseif ($choix < $chiffre){
    echo "C'est plus grand \n";
    $vie++;
  }
  else{
    $fin = true;
    echo "GAGNANT";
  }
}
?>
