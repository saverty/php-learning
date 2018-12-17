<?php
  $promotion = array(
    array(
      'prenom'=>'steve',
      'nom'=>'averty',
      'age' => 24
    ),
    array(
      'prenom'=>'toto',
      'nom'=>'toto_name',
      'age' => 18
    ),
    array(
      'prenom'=>'titi',
      'nom'=>'titi_name',
      'age' => 30
    )
  );

  $promotionSimple = array("julien", "severine","damien", "pauline");
?>
<html lang="en">
  <?php include('../head.php') ?>

  <body>
    <?php include('../nav.php') ?>
    <?php
      for ($i=0; $i < sizeof($promotionSimple); $i++) {
        ?>
          <ul class="list-group col-lg-3" >
            <li class="list-group-item">Prenom : <?php echo $promotionSimple[$i]?></li>
        </ul><?php
      }
    ?>
      <?php
        for ($i=0; $i < sizeof($promotion); $i++) {
          ?>
            <ul class="list-group col-lg-3" >
            <li class="list-group-item">Prenom : <?php echo $promotion[$i]["prenom"]?></li>
            <li class="list-group-item">Nom : <?php echo $promotion[$i]["nom"] ?></li>
            <li class="list-group-item">Age :<?php echo $promotion[$i]["age"] ?></li>
          </ul><?php
        }
      ?>
      <?php
      foreach ($promotion as $value) {
        echo '<ul class="list-group col-lg-3" >';
        foreach ($value as $key => $user) {
          echo '<li class="list-group-item">'.$key.':'.$value[$key].'</li>';
        }
        echo '</ul>';
      }
      ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
