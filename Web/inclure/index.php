
<!-- PREMIERE METHODE -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/php_learning">MOS TP</a></li>
            <li><a href="/php_learning/date">DATE</a></li>
            <li><a href="/php_learning/promo">PROMOTION</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </body>
</html>

<!-- DEUXIEME METHODE -->
<!DOCTYPE html>
<html>
<?php include('../head.php') ?>

  <body>
  <?php include('../nav.php') ?>
  <h1>Il est <?php echo date("h:m:s"); ?></h1>
  </body>
</html>
