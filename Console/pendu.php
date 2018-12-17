<?php

$mot = readline('Entrez un mot : ');
$essai = 0;
$win = false;

while($win == false && $essai <5){
  $lettre = readline("Choisissez une lettre : ");
  $charFind = false;
  for ($i=0; $i < strlen($mot) ; $i++) {
    if($mot[$i] == $lettre){
      echo "Trouvé \n";
      $charFind = true;
      $mot =  str_replace($lettre, '', $mot);
    }
  }

  echo $mot."\n";
  if($charFind == false){
    echo "Pas trouvé \n";
    $essai++;
  }
  if(strlen($mot) == 0){
      $win = true;
  }
}

if($win == true){
  echo "you win";
}
else{
  echo "tu perds";
}

?>
