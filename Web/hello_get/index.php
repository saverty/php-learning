
<?php
if(isset($_GET['prenom'])){
  $prenom = $_GET['prenom'];
}
else{
  $prenom ="inconnu";
}
?>
<!DOCTYPE html>
<html>
<?php include('../head.php') ?>

  <body>
  <?php include('../nav.php') ?>

  <?php
  echo "<h1>Salut ".$prenom."</h1>";


   ?>
  </body>
</html>
