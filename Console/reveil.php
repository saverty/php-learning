<?php

$heure_user = readline('Heure reveil : ');

while(date("H:i") != $heure_user){
  sleep(10);
}
echo "Debout";

$heure = date("H:i");
echo $heure;

echo date("H:i");
?>
