<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello <?php echo $_GET['name'] ?></h1>

    <ul>
        <?php 
        $i = 0;
        while($i < 10){
            echo "<li>$i</li>";
            $i++;
        }
        ?>
    </ul>
</body>
</html>