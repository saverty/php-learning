<?php

function myStrlen($string){
  $string = str_replace("\0", "/0", $string);
  $string = $string."\0";

  $i = 0;

  while($string[$i] != "\0"){
    $i++;
  }
  return $i-=1;
}
echo strlen("salut \n \0 ca va ?")."\n";
echo myStrlen("salut \n \0 ca va ?");
?>
