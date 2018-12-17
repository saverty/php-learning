<?php

function check($grille){
  if(sizeof($grille) == 0){
    return true;
  }
  else{
    return false;
  }
}

function generate(){
  $grille = array();

  for ($i=0; $i < 10; $i++) {
    $is_unic = true;

    while ($is_unic == true) {
      $rand = rand(1,50);
      if(!in_array($rand,$grille)){
        $is_unic = false;
        array_push($grille,$rand);
      }
    }
  }
  return $grille;
}

function display($grille){
  foreach ($grille as $value) {
    echo  $value.' | ';
  }
}
$grille = generate();
display($grille);
$win = false;

for ($i=0; $i < 10; $i++) {
  $is_unic = true;

  while ($is_unic == true) {
    $rand = rand(1,50);
    if(!in_array($rand,$grille)){
      $is_unic = false;
      array_push($grille,$rand);
    }
  }
}

$rep = 0;
while ($win == false) {
  $rep++;
  $rand = rand(1,50);

  for ($i = 0; $i < sizeof($grille); $i++) {
    if($grille[$i] == $rand){
      unset($grille[$i]);
      $grille= array_values($grille);
    }
    $win = check($grille);
  }
}
echo "\n resultat : ".$rep."\n";
?>
