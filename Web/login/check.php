<?php
$users = file_get_contents("user.json");
$users = json_decode($users,true);
$connected = false;

if(isset($_POST['email']) && isset($_POST['password'])){
  foreach ($users as $user) {
    if($user['email'] == $_POST['email'] && $user['password'] == sha1($_POST['password'])){
      setcookie("login",$_POST['email'],time()+360);
      $connected = true;
      header('Location: dashboard.php');
    }
  }
}
else{
  header('Location: error.php?error=password+or+email+empty');
}

if($connected == false){
  header('Location: error.php?error=password+ou+email+faux');
}



?>
