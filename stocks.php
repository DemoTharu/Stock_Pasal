<?php
    require "database/database.php";
    $queryss = "SELECT * FROM stock_info";
    $results = $con->query($queryss);
    if ($results->num_rows>0) {
        $res = mysqli_fetch_all($results,MYSQLI_ASSOC);
    }
    else {
        echo "<script>alert('You have an Error');</script>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stocks</title>
    <script src="https://kit.fontawesome.com/dc0fcbd0b4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/stocks.css">
</head>
<body>
    <div class="table">
        <div class="center">
            <table>
                <thead>
                    <td width="20px";><strong>S.N</strong></td>
                    <td width="75%"  class="a"><strong>Stock Name</strong></td>
                    <td ><strong>Stocks</strong></td>
                    <td><strong>Rate Per Unit</strong></td>
                    <td><strong>Edit</strong></td>
                </thead>
                        <?php
                            foreach ($res as $ress)
                                {
                        ?>
                        <form action="edit.php" method="POST">
                                <tr>
                                    <td><?php echo $ress['S.N.']; ?></td>
                                    <input type="hidden" name="id" value="<?php echo $ress['S.N.']; ?>">
                                    <td class="a"><?php echo $ress['Stock Name']; ?></td>
                                    <td><input type="number" name="st" value="<?php echo $ress['Stocks']; ?>"></td>
                                    <td><?php echo $ress['Rate']; ?></td>
                                    <td><button type="submit" class="btn"><i class="fa-solid fa-pen-to-square"></i></button></td>
                                </tr>
                        </form>
                        <?php
                                }
                        ?>
            </table>
        </div>
    </div>
</body>
</html>