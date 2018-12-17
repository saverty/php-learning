<?php
session_start();

if($_GET['chiffre'] > $_SESSION['random']){
  $tip = "moins";
  $_SESSION['life']--;
}

else if($_GET['chiffre'] < $_SESSION['random']){
  $tip = "plus";
  $_SESSION['life']--;
}

else{
  $_SESSION['win'] = true;
}


header('Location: play.php?tip='.$tip);

?>
