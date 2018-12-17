<?php
session_start();

?>
<!DOCTYPE html>
<html>
<?php include('../head.php') ?>
  <body>
    <?php include('../nav.php') ?>
  <body>
    <div class="container">
      <div class="jumbotron">
        <h1>Plus ou moins ...</h1>
        <h3>Nombre de vie : <?php echo $_SESSION['life'] ?></h3>
        <h3>Choisir un chiffre entre <?php echo $_SESSION['min'] ?> et <?php echo $_SESSION['max'] ?></h3>
        <?php
        if(isset($_GET['tip'])){?>
          <h3>C'est <?php echo $_GET['tip'] ?></h3>
          <?php
        }
        ?>

      </div>

    <?php
    if($_SESSION['life'] > 0){
      if($_SESSION['win'] == true){
        ?>
        <h1>GAGNE </h1>
        <a href="index.php">Click to replay</a>
        <?php
      }
      else{
        ?>
        <form class="" action="check.php" method="get">
          <!-- Text input-->
          <div class="form-group col-lg-6 col-lg-offset-3">
            <p class="col-lg-12">CHIFFRE : </p>
            <div class="col-lg-6">
            <input id="chiffre" name="chiffre" placeholder="" class="form-control input-md" type="integer">
            </div>
            <div class="col-lg-6">
            <input id="" name="" placeholder="" class="form-control input-md" type="submit">
            </div>
          </div>
        </form>
        <?php
      }
    }

    else{
      ?>
      <h1>PERDU ! </h1>
      <a href="index.php">Click to replay</a>
      <?php
    }
      ?>
    </div>
  </body>
</html>
