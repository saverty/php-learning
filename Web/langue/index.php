<?php
if(isset($_GET['langue'])){
  $langue = $_GET['langue'];
}
else{
  $langue = 'fr';
}

$message = "bonjour";

switch ($langue) {
  case 'fr':
    $message = "Bonjour";
    break;

  case 'en':
    $message = "Hello";
    break;

  case 'it':
    $message = "buongiorno";
    break;
}
?>

<!DOCTYPE html>
<html>
<?php include('../head.php') ?>

<body>
  <?php include('../nav.php') ?>
    <h1><?php echo $message; ?></h1>

  </body>
</html>
