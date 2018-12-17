<?php
function display($tab){
  for($i = 0; $i< sizeof($tab); $i++){
    for ($j = 0; $j < sizeof($tab[$i]); $j++) {
      echo $tab[$i][$j];
    }
    echo "\n";
  }
}

function check($tab,$char,$player){
  if($tab[0][0] == $char && $tab[1][1] == $char && $tab[2][2] == $char){
    return $player;
  }
  elseif($tab[0][2] == $char && $tab[1][1] == $char && $tab[2][0] == $char){
    return $player;
  }
  elseif($tab[0][0] == $char && $tab[0][1] == $char && $tab[0][2] == $char){
    return $player;
  }
  elseif($tab[1][0] == $char && $tab[1][1] == $char && $tab[1][2] == $char){
    return $player;
  }
  elseif($tab[2][0] == $char && $tab[2][1] == $char && $tab[2][2] == $char){
    return $player;
  }
  elseif($tab[0][0] == $char && $tab[1][0] == $char && $tab[2][0] == $char){
    return $player;
  }
  elseif($tab[0][1] == $char && $tab[1][1] == $char && $tab[2][1] == $char){
    return $player;
  }
  elseif($tab[0][2] == $char && $tab[1][2] == $char && $tab[2][2] == $char){
    return $player;
  }
  else{
    return false;
  }
}
$win = false;

$tab = array(
  array('-','-','-'),
  array('-','-','-'),
  array('-','-','-')
);

display($tab);
$iteration = 1;

while ($win == false) {

  if($iteration%2 == 1){
    $joueurLigne = readline("Joueur 1 | n° ligne :  ");
    $joueurColonne = readline("Joueur 1 | n° colonne :  ");

    $tab[$joueurLigne][$joueurColonne] = 'X';
    $win = check($tab,'X', 'joueur1');
  }
  else{
    $joueurLigne = readline("Joueur 2 | n° ligne :  ");
    $joueurColonne = readline("Joueur 2 | n° colonne :  ");

    $tab[$joueurLigne][$joueurColonne] = 'O';
    $win = check($tab,'0', 'joueur2');
  }

  display($tab);
  $iteration++;
}

echo "Gagnant : ".$win;
 ?>
