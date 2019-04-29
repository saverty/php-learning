<?php

$email = readline('Votre email : ');
$password = readline('Votre password : ');


if($email  == "admin@dw.fr" && $password == "designerweb"){
    echo "Connexion ok \n";
}
else{
    echo "Connexion impossible \n";
    
    if($email != "admin@dw.fr"){
        echo "Email faux \n";
    }

    if($password != "designerweb"){
        echo "Mot de passe faux \n";
    }
}