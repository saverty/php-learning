<?php
function mailExist($users){
  foreach ($users as $user) {
    if($user['email'] == $_POST['email']){
      return true;
    }
  }
  return false;
}

function checkData($email, $password){
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    return false;
  }
  elseif(strlen($password) <6){
    return false;
  }
  else{
    return true;
  }
}

$users = file_get_contents("user.json");
$users = json_decode($users,true);
$email_exist = false;

$email_exist = mailExist($users);


if(!$email_exist && checkData($_POST['email'], $_POST['password'])){
  array_push($users,
    array(
      "email" => $_POST['email'],
      "password" => sha1($_POST['password'])
    )
  );

  file_put_contents("user.json", json_encode($users));
  setcookie("login",$_POST['email'],time()+360);
  header('Location: dashboard.php');
}

else{
  header('Location: index.php');
}

?>
