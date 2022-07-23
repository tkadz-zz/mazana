<?php
class UserView extends Model {


    public function viewItems($name, $surname)
    {
        echo $name . ': This is from View Class';
        $this->viewItemss($name, $surname);
    }

    public function listAllItems(){
        $rows = $this->listAllItemss();
        ?>
        <table class="table">
            <tr>
                <th>#</th>
                <th>Information</th>
                <th>Date</th>
            </tr>

            <?php

            foreach ($rows as $row){
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['information'] ?></td>
                    <td><?php echo $row['dateAdded'] ?></td>
                </tr>
                <?php
            }
            ?>


        </table>
        <?php

    }


}
?>