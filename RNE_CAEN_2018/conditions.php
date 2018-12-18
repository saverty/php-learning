<?php
$postalCode = readline("Code postal : ");

if($postalCode == 14200 || $postalCode == 14100){
echo "Calvados";
}

else if($postalCode > 61000 && $postalCode < 61999){
echo "orne";
}
else{
    echo "Autre";
}