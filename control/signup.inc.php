<?php
include("autoloader.inc.php");

$usernameRaw = $_POST["username"];
$username = strtoupper($usernameRaw);

$email = $_POST["email"];

$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];


if($password != $confirmPassword){
    $_SESSION['type'] = 'd';
    $_SESSION['err'] = 'Password did not match';
  echo "<script type='text/javascript'>;
             window.location='../signup.php';
            </script>";
}



elseif(strlen($username) < 5){
    $_SESSION['type'] = 'd';
    $_SESSION['err'] = 'Username did not match minimum requirement';
  echo "<script type='text/javascript'>;
             window.location='../signup.php';
            </script>";
}

elseif(strlen($email) < 1){
    $_SESSION['type'] = 'd';
    $_SESSION['err'] = 'Email is empty';
  echo "<script type='text/javascript'>;
             window.location='../signup.php';
            </script>";
}

elseif (strlen($password) < 8 || strlen($confirmPassword) < 8){
    $_SESSION['type'] = 'd';
    $_SESSION['err'] = 'Password is too short';
  echo "<script type='text/javascript'>;
             window.location='../signup.php';
            </script>";
}


else{

    $password = password_hash($confirmPassword, PASSWORD_BCRYPT);

    $joined = date("Y-m-d h:m:i");
    $reg_status = 1;
    $active_status = 1;
    $user_role = "user";


    try {
      $sign_up_now = new UserController();
      $sign_up_now->creatUserAccount($username, $email, $password, $confirmPassword, $user_role, $active_status, $reg_status, $joined);
    } catch (TypeError $e) {
      echo "Error" . $e->getMessage();

    }



}


 ?>
