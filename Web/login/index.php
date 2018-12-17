<?php
if(isset($_COOKIE["login"])){
  header('Location: dashboard.php');
}
?>
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
			    	<h3 class="panel-title">MOS LOGIN</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form method="post" action="check.php">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="yourmail@example.com" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    	</fieldset>
          </form>
			</div>
		</div>
	</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">MOS REGISTER</h3>
      </div>
        <div class="panel-body">
          <form method="post" action="register.php">
                  <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="yourmail@example.com" name="email" type="text">
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Password" name="password" type="password" value="">
            </div>
            <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
          </fieldset>
        </form>
    </div>
  </div>
</div>
</div>

  </body>
</html>
