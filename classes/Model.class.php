<?php



class Model extends Dbh {


    protected function viewItemss($name, $surname){
        echo '<br>';
        echo $surname . ': This is from Model Class';
    }



    protected function listAllItemss(){
        $sql = "SELECT * FROM info";
        $stmt = $this->con()->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll();
        return $rows;
    }


    protected function addInformation($information,$mydate){
        $sql = "INSERT INTO info(information, dateAdded) VALUES(?,?)";
        $stmt = $this->con()->prepare($sql);
        if($stmt->execute([$information, $mydate])){
            echo "<script type='text/javascript'>;
                      window.location='../index.php';
                    </script>";
        }
        else{
            echo "<script type='text/javascript'>;
                      window.location='../index.php';
                    </script>";
        }
    }


}



?>