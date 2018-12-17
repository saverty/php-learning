<?php


function temperature($degres){
  if($degres  <= 0){
    return "trés froid";
  }

  elseif($degres <= 10){
    return "froid";
  }

  elseif ($degres <= 20) {
    return "normale";
  }

  elseif ($degres <= 30) {
    return "chaud";
  }

  else{
    return "trés chaud";
  }
}
$current = file_get_contents("http://api.openweathermap.org/data/2.5/find?q=Caen&APPID=58aca915ec493b12452da3cfc0efe032&units=metric");
$degres = json_decode($current);
$degres = $degres->list[0]->main->temp;

?>


<html lang="en">
  <?php
  session_start();
  include('../head.php') ?>

  <body>
    <?php include('../nav.php') ?>
    <h1 style="font-size:100px;text-align:center;"><small>Il fait </small><?php echo temperature($degres) ?></h1>
    <h1 style="font-size:100px;text-align:center;"><small><?php echo $degres.'°' ?></small></h1>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
