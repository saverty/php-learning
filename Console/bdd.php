<?php

try{
  $baseDeDonnee = new PDO('mysql:host=localhost;dbname=mos;charset=utf8', 'root', 'root');
}

catch(Exception $e){
  die($e->getMessage());
}

$utilisateur_query = $baseDeDonnee->query('SELECT * FROM utilisateurs');

while ($utilisateur = $utilisateur_query->fetch()) {
  echo $utilisateur['nom']."\n";
  echo $utilisateur['prenom']."\n";
  echo $utilisateur['age']."\n";
  echo "=============\n";
}
