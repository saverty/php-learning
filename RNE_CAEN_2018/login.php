<?php

$mail = readline("Votre email : ");
$mdp = readline("mdp : ");



if(filter_var($mail, FILTER_VALIDATE_EMAIL) != true){
    echo "Le format du mail est faux";
}
else if($mail == "toto@gmail.com" && mdp == "1234" ){
    echo "ok";
}
else{
    echo "Pas ok";
}