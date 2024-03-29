<?php require("handleData/mySQLDatabase.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/global.css">
    <title>Products</title>
</head>
<body>
    <div class="container">
        <center class="mt-4">
            <a class='btn btn-primary fw-bold' href='index.php'>Add Product</a>
            <h2 class="my-4 fw-bold">Admin Control Panel</h2>
            <?php include "handleData/deleteProduct.php"; ?>
    
            <div class="row">
                <?php
                    require("components/CardUI.php");
                    $res = mySqlSelectData("products");
                    while($row = mysqli_fetch_array($res)):
                        echo cardUI($row, "products");
                    endwhile;
                ?>
            </div>
        </center>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>