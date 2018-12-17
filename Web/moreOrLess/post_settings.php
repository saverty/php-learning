<?php

session_start();
$_SESSION['min'] = $_POST['min'];
$_SESSION['max'] = $_POST['max'];
$_SESSION['random'] = rand($_POST['min'], $_POST['max']);

$_SESSION['life'] = $_POST['life'];
$_SESSION['win'] = false;

header('Location: play.php');


?>
