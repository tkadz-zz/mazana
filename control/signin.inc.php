<?php
include 'autoloader.inc.php';

if(isset($_POST['btn-signin'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        $login = new UserController();
        $login->login($email, $password);

    } catch (TypeError $e) {
        echo "Error" . $e->getMessage();
    }
}
else{
    echo "<script type='text/javascript'>;
             window.location='../signin.php';
            </script>";
}