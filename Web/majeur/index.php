<?php
function verificationMajeur($age,$limit){
    if($age >= $limit){
      return "majeur";
    }
    else{
      return "mineur";
    }
}
function checkPair($age){
  if($age%2 == 0){
    return "text-danger";
  }
  else{
    return "";
  }
}
$age = 18;


?>
<!DOCTYPE html>
<html>
<?php include('../head.php') ?>

  <body>
  <?php include('../nav.php') ?>

  <h1 class="<?php echo checkPair($age) ?>"> Aux etats unis tu es <?php echo verificationMajeur($age,21) ?></h1>
  <h1 class="<?php echo checkPair($age) ?>">En France tu es <?php echo verificationMajeur($age,18) ?></h1>

  </body>
</html>
