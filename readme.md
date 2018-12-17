# PHP - Cours
  
Ce package est une suite de TP corrigés afin d'apprendre les différentes notions de programmation en PHP.
A noter que ces codes sont à usages pédagogiques. Ceux ci sont donc réalisés afin de comprendre des notions et non d'être le plus optimisés possible. 

**Vous retrouverez 3 dossiers :** 

 - Console : Comprendre le PHP via le terminal 
 - Web : Intégrer le php dans ses projets web 
 - Database : Les interactions avec la base de données 

## Console  

**Executer un fichier php**

    php monFichier.php

**Ecrire du texte**

    echo "Hello world"; 

**Les variables** 

    $prenom = "Steve";
    echo "Salut $steve";

**Concatener** 

	$prenom = "steve";
	echo "Salut ".$steve." comment vas tu ? ";
    
**Les fonctions** 

    $prenom = readline("Quel est votre prenom ? ");
    echo "Vortre prenom est $prenom";

**Les conditions** 

    $codePostal = 14000;
    
    if($codePostal == 14000){
	    echo "Tu es Caennais, Felicitations ! ";
    }
    else if ($codePostal == 75000){
	    echo "Tu es parisien, Désolé :/";
    }
    else{
		echo "Code postal inconnu";
	}

**Boucles** 

    //While loop
    $count = 1;
    
    while($count != 10){
		echo "Iteration : $count";
		$count++;
	}

	//For loop
	for($i = 1; $i <= 10 ; $i++){
		echo "Iteration : $i";
	}
    
