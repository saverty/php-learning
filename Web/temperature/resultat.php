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
?>
<html lang="en">
  <?php
  include('../head.php') ?>

  <body>
    <?php include('../nav.php') ?>
    <h1 style="font-size:100px;text-align:center;"><small>Il fait </small><?php echo temperature($_GET['degres']) ?></h1>
    <h1 style="font-size:100px;text-align:center;"><small><?php echo $_GET['degres'].'°' ?></small></h1>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
