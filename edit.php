<?php
    require "database/database.php";
        $id = $_POST['id'];
        $stock = $_POST['st'];
        
        $sql = "UPDATE `stock_info` SET `Stocks` = '$stock' WHERE `stock_info`.`S.N.` = '$id';";

        if ($con->query($sql) === TRUE) {
            echo "<script>alert('Data Updated successfully');</script>";
            ?>
            <meta http-equiv="refresh" content="0; url='nav_stocks.php'">
            <?php
        }
        else{
            echo "<script>alert('You have error in updating');</script>";
        }

?>