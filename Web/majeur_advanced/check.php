<?php
function verificationMajeur($age,$limit){
    if($age >= $limit){
      return "major";
    }
    else{
      return "minor";
    }
}

$year = $_GET['year'];
$limit = $_GET['limit'];

$age = date('Y')-$year;
header('Location: index.php?result='.verificationMajeur($age,$limit));



?>
