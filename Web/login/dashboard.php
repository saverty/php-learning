<?php
if(!isset($_COOKIE["login"])){
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<?php include('../head.php') ?>

  <body>
  <?php include('../nav.php') ?>
  <h1>DASHBOARD</h1>
  </body>
</html>
