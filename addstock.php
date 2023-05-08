<?php
    session_start();
    require "database/database.php";

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $stock = $_POST['stock'];
        $rate = $_POST['rate'];

        $sql = "INSERT INTO stock_info VALUES ('','$name','$stock','$rate')";

        if ($con->query($sql) === TRUE) {
            echo "<script>alert('Data Inserted Succeessfully !!!');</script>";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Stock</title>
    <link rel="stylesheet" href="css/addstock.css">
</head>
<body>
    <section>
        <div class="main">
            <div class="container">
                <form action="" method="post">
                    <div class="inputs">
                        <div class="name">
                            <div class="heading">
                                <span><strong>Stock Name</strong></span>
                            </div>
                            <div class="input">
                                <input type="text" name="name" id="name" required placeholder="Enter Stock Name">
                            </div>
                        </div>
                        <div class="stocks">
                            <div class="heading">
                                <span><strong>Stocks</strong></span>
                            </div>
                            <div class="input">
                                <input type="text" name="stock" id="stock" required pattern="[0-9]*" placeholder="1 to 100">
                            </div>
                        </div>
                        <div class="rate">
                            <div class="heading">
                                <span><strong>Rate per Unit</strong></span>
                            </div>
                            <div class="input">
                                <input type="text" name="rate" id="rate" required pattern="[0-9]*" placeholder="Enter Rate per Unit">
                            </div>
                        </div>
                    </div>
                    <div class="btn">
                        <input type="submit" value="Submit" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>