<?php

$participant = readline('entrez les participants : ');

$participant2 = explode(",",$participant);

$random = rand(0, sizeof($participant2)-1);

echo "Le gagnant est ...\n";
sleep(2);
echo "Trop de suspens ...\n";
sleep(2);
echo $participant2[$random]." !!! \n";
?>
