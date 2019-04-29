<?php

$success = false;
$tentative = 0;


while($success == false && $tentative < 3){
    $pincode = readline('Code pin : ');

    if($pincode == "1234"){
       $success = true;
    }
    else{
        $tentative++;
    }
}

if($success == true){
    echo "Accés autorise";
}
else{
    echo "Accés non autorisé";
}




