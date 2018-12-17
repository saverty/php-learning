<?php
try{
  $bdd = new PDO('mysql:host=localhost;dbname=manche_open_school;charset=utf8', '***', '***');
}
catch(Exception $e){
  die('MySql Erreur : '.$e->getMessage());
}

$query = "SELECT * FROM utilisateurs";
$result = $bdd->query($query);

$user_number = 1;
while($data = $result->fetch()){
  echo "##################################\n";
  echo "Utilisateur $user_number \n";
  echo "le prenom est ".ucfirst($data["prenom"])."\n";
  echo "le nom est ".strtoupper($data["nom"])."\n";
  echo "L'email est ".$data["email"]."\n";
  echo "le numero de telephone est  ".$data["phone"]."\n";
  $user_number++;
}

?>
