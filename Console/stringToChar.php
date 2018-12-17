<?php

$phrase = readline("Entrer une phrase : ");

for($i = 0; $i < strlen($phrase); $i++){
  $numeroLettre = $i+1;
  echo "La lettre ".$numeroLettre.":".$phrase[$i]."\n";
}

$i = strlen($phrase) - 1;
for($i; $i >= 0; $i--){
  echo $phrase[$i];
}

?>
