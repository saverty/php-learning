<?php
//Envoyer des SMS

//Etat du programme pour continuer ou arreter l'execution
$etatDuProgramme = true;

//Le tableau dans lequel je vais mettre toute mes todo
$historiqueTodo = array();

//Tant que l'etait du programme est a true on boucle
while($etatDuProgramme == true){

  //Affichage du menu
  echo "\n1) Ajouter une TODO\n";
  echo "2) Afficher les TODO\n";
  echo "3) Supprimer une todo\n";
  echo "4) Eteindre le programme\n";
  //on demande a l'utiliateur quel action du menu il veut executer
  $choix = readline("Choix : ");

  //Si le choix est 1 on ajoute une todo
  if($choix == 1 ){

    //Je demande a l'utilisateur sa todo et je la met dans la variable todo
    $todo = readline("Votre Todo : ");

    //array_push est une fonction qui permet d'ajouter une donnée dans un tableau
    // ici j'ajoute le contenu de la variable todo dans le tableau historiqueTodo crée au tout début du programme
    array_push($historiqueTodo, $todo);
  }

  //Si le choix est 2 , on affiche toutes les todo
  else if($choix == 2){
    displayTodo($historiqueTodo);
  }

  //Si le choix est 3, on quitte le programme
  elseif ($choix == 3) {

    displayTodo($historiqueTodo);
    $toDoSuppr = readLine("Taper le numero de la todo a supprimer : ");
    unset($historiqueTodo[$toDoSuppr-1]);
    $historiqueTodo = array_values($historiqueTodo);
  }

  elseif ($choix == 4){
    //J'attribut la valeur false a ma variable etatDuProgramme
    $etatDuProgramme = false;
  }
  //Si l'utilisateur a saisi un autre chiffre que 1,2 ou 3 je lui dit qu'il a fait une erreur
  else{
    echo "Veuilez saisir un chiffre entre 1 et 2 ";
  }

  //Si la variable etatDuProgramme est encore a true on recommence la boucle principale , sinon le programme sort de la boucle et s'arrete
}
function displayTodo($historiqueTodo){
  echo "\n###################\n";

  //Pour i egale 0, tant que i est inferreieur a la taille du tableau historiqueTodo je reste dans ma boucle et j'ajoute 1 a i a chaque boucle !
  for ($i = 0; $i < sizeof($historiqueTodo); $i ++) {

    //J'ajoute 1 a i car i commence a 0
    $nombre = $i+1;

    //J'affiche la todo qui est a l'index i du tableau
    echo "todo ".$nombre." : ".$historiqueTodo[$i]."\n";
  }
  echo "###################\n";
}
?>
