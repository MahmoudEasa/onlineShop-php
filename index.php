<?php require("handleData/mySQLDatabase.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/index.css">
    <?php
        if(isset($_GET["update"])) {
            echo "<title>Update | تعديل منتج</title>";
        }else {
            echo "<title>Shop Online | إضافة منتجات</title>";
        }
    ?>
</head>
<body>
    <center class="container">
        <div class="row">
            <div class="col-12 col-lg-6 m-auto">
                <div class="main">
                    <form method="post" enctype="multipart/form-data">
                        <?php
                            if(isset($_GET["update"])) {
                                echo "<h2>تعديل المنتج</h2>";
                            }else {
                                echo "<h2>موقع تسويقي أونلاين</h2>";
                                echo "<img class='logo' src='images/logo.webp' alt='Logo'><br>";
                            }
                            require("handleData/insertProduct.php");
                            require("handleData/updateProduct.php");
        
                            if(isset($_GET["update"])){
                                require("components/UpdateProductUI.php");
                            }else {
                                require("components/InsertProductUI.php");
                            }
                        ?>
                        
                    </form>
                </div>
            </div>
        </div>
        <p>Developer By Mahmoud Easa</p>
    </center>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>