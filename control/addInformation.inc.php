<?php
include 'autoloader.inc.php';

$button = $_POST['btn_submit'];
$information = $_POST['information_input'];
$mydate = date('d-m-y h:m:s');

if(isset($button)){

    $n = new UserController();
    $n->addInformation($information,$mydate);

}
else{
    echo 'button not pressed';
}


?>