<?php

$temperature = readline("temeprature : ");

if($temperature  <= 0){
  echo "il fait trés froid";
}

elseif($temperature <= 10){
  echo "il fait froid";
}

elseif ($temperature <= 20) {
  echo "La temperature est normale";
}

elseif ($temperature <= 30) {
  echo "Il fait chaud";
}

else{
  echo "il fait trés chaud";
}
?>
