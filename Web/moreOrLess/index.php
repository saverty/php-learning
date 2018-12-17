<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php include('../head.php') ?>
  <body>
    <?php include('../nav.php') ?>

    <div class="container">
      <div class="jumbotron">
        <h1>Plus ou moins ...</h1>
        <p>BEST VIEO GAME EVER</p>
      </div>
      <form class="form-horizontal" action="post_settings.php" method="post">
        <fieldset>

      <!-- Form Name -->
      <legend>GAME SETTINGS</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="min">Minimum</label>
        <div class="col-md-4">
        <input id="min" name="min" class="form-control input-md" type="text">

        </div>
      </div>

      <!-- Text input-->
          <div class="form-group">
          <label class="col-md-4 control-label" for="max">Maximum</label>
          <div class="col-md-4">
          <input id="max" name="max"  class="form-control input-md" type="text">

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="life">Nombre de vie</label>
          <div class="col-md-4">
          <input id="life" name="life" placeholder="" class="form-control input-md" type="text">

          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="send"></label>
          <div class="col-md-4">
            <input type="submit" id="send" name="send" class="btn btn-primary" value="play">
          </div>
        </div>

      </fieldset>
    </form>

    </div>
  </body>
</html>
