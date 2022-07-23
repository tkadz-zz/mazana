<?php
include 'includes/mainPageTop.inc.php';
?>

<span>Dashboard</span></a>

<div class="pt-4">
    <?php
    $name = 'Tanaka';
    $surname = 'Kadzunge';

    $n = new UserView();
    //$n->viewItems($name, $surname);
    ?>
</div>



<div class="row">
    <div class="col-md-6 shadow-sm">
        <form class="form card-body" method="POST" action="control/addInformation.inc.php">
            <label>Information</label><br>
            <input class="form-control" type="text" placeholder="Information..." name="information_input" required>
            <br>
            <input class="btn btn-primary" type="submit" value="Add" name="btn_submit">
        </form>
    </div>

    <div class="col-md-6">
        <?php
        //since intalised, use the variable $n
        $n->listAllItems();
        ?>
    </div>
</div>






<?php
include 'includes/mainPageBottom.inc.php';
?>





