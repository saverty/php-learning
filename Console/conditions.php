<?php

function check($age){
  if($age >= 18){
    return "majeur";
  }
  else{
    return "mineur";
  }
}
//On initialise la variable et on lui attribue la vlaeur que l'utilisateur rentrera
$age = readline('Quel est votre age ? ');

echo "vous etes ".check($age);
?>
