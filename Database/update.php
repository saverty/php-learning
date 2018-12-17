<?php
try{
  $bdd = new PDO('mysql:host=localhost;dbname=manche_open_school;charset=utf8', '***', '***');
}
catch(Exception $e){
  die('MySql Erreur : '.$e->getMessage());
}

$email = readline("Email a modifier : ");
$newEmail = readline("Entrez le nouveau email : ");

$query = "SELECT * FROM utilisateurs WHERE email='$email'";
$result = $bdd->query($query);

$result = count($result->fetchAll());

if($result > 0){
  $deleteQuery = "UPDATE utilisateurs SET email='$newEmail' WHERE email='$email'";
  $bdd->exec($deleteQuery);
  echo "Email modifié";
}
else{
  echo "email existe pas ";
}
?>
