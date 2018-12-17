<html lang="en">
  <?php
  session_start();
  include('../head.php') ?>

  <body>
    <?php include('../nav.php') ?>
    <h1>Temperature</h1>
    <form class="col-lg-8 col-lg-offset-4" action="resultat.php" method="get">
      <div class="input-group col-lg-4">
        temperature: <input type="text" name="degres"class="form-control" placeholder="">
        <input type="submit" value="Envoyer" class="form-control btn-success  col-lg-2" placeholder="">
      </div>
    </form>

<h1 class="toto"><?php echo $prenom ?></h1>
<?php echo "<h1 class='toto'>$prenom</h1>" ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
