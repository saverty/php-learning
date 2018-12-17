<!DOCTYPE html>
<html>
<?php include('../head.php') ?>

  <body>
  <?php include('../nav.php') ?>
    <div class="container">
      <div class="row">
      	<div class="col-md-4 col-md-offset-4">
      		<div class="panel panel-default">
  			  	<div class="panel-heading">
  			    	<h3 class="panel-title">ARE YOU ADULT ?</h3>
  			 	</div>
  			  	<div class="panel-body">
  			    	<form method="get" action="check.php">
                  <fieldset>
  			    	  	<div class="form-group">
                    <select class="col-lg-12" name="year">
                      <?php
                      for ($i=2017; $i > 1900 ; $i--) {
                        ?><option value="<?php echo $i ?>"> <?php echo $i ?></option><?php
                      }
                       ?>
                    </select>
            		</div>
                <select class="col-lg-12" name="limit">
                <?php for($i = 16; $i < 100 ; $i++){
                  ?>
                    <option value="<?php echo $i ?>"> <?php echo $i ?></option><?php

                } ?>
              </select>
              <input class="btn btn-lg btn-success btn-block" type="submit" value="CHECK">
            </form>
  			</div>
  		</div>
  	</div>
  </div>
  <div class="col-lg-12">
    <?php
    if(isset($_GET['result'])){
      ?><h1 style="font-size:100px;text-align:center;"><small>You are </small><?php echo $_GET['result'] ?></h1><?php
      }
    ?>
  </div>
  </body>
</html>
