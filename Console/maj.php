<?php

function myUpper($string){
  for($i = 0 ; $i < strlen($string); $i++){
    $decimal = ord($string[$i]);

    if($decimal != '32'){
      $decimal-=32;
      $string[$i] = chr($decimal);
    }
  }
  return $string;
}

echo myUpper("salut ca va ?");
?>
