<?php

function checkData($prenom, $nom, $phone, $email, $password){
  $result = array();

  if(empty($prenom)){
    array_push($result, 'Prenom vide');
  }
  if(empty($nom)){
    array_push($result, 'Nom vide');
  }
  if(empty($phone)){
    array_push($result, 'Numero de tel vide');
  }
  if(strlen($password)< 6 ){
    array_push($result, 'Mot de passe trop court, minimum 6');
  }
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    array_push($result, 'Email invalide');
  }

  return $result;
}

try{
  $bdd = new PDO('mysql:host=localhost;dbname=manche_open_school;charset=utf8', '***', '***');
}
catch(Exception $e){
  die('MySql Erreur : '.$e->getMessage());
}

$prenom   = readline('prenom       : ');
$nom      = readline('nom          : ');
$phone    = readline('phone        : ');
$email    = readline('email        : ');
$password = readline('mot de passe : ');

$query = "INSERT INTO utilisateurs(prenom, nom, phone, email,password) VALUE('$prenom', '$nom','$phone','$email','$password')";

$data = checkData($prenom,$nom,$phone,$email,$password);
if(sizeof($data) > 0){
  echo "Erreur : \n";
  foreach ($data as $error) {
    echo "$error\n";
  }
}
else{
  $bdd->exec($query);
}

?>
