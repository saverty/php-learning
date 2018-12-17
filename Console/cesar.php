<?php
function cesar($int, $phrase){
  $alph = 'abcdefghijklmnopqrstuvwxyz';

  for ($i = 0; $i < strlen($phrase) ; $i++) {
      $phrase

  }
}

function uncrypt($int, $code){
  for ($i = 0; $i < strlen($code) ; $i++) {
    $crypt = ord($code[$i])-$int;
    echo chr($crypt);
  }
  echo "\n";
}

echo cesar(8,"SALUT LA MOS")."\n";

for ($i=0; $i < 10; $i++) {
  echo uncrypt($i, 'XPX');
}
?>
