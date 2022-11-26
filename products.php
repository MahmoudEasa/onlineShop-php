<?php require("handleData/mySQLDatabase.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/global.css">
    <title>Products | المنتجات</title>
</head>
<body>
    <div class="container">
        <center class="mt-4">
            <a class='btn btn-primary fw-bold' href='index.php'>إضافة منتج</a>
            <h2 class="mb-4 fw-bold">جميع المنتجات المتوفرة</h2>
            <?php include "handleData/deleteProduct.php"; ?>
    
            <div class="row">
                <?php
                    $res = mySqlSelectData("products");
                    while($row = mysqli_fetch_array($res)):
                ?>
    
                <div class="cal-12 col-lg-5 col-xl-4 m-auto">
                    <div class="card mb-3" style="width: 18rem;">
                        <?php
                            echo "<img src='{$row['image']}'
                                class='card-img-top' alt='product-img'
                                style='width: 18rem; height: 13rem;'>";
                        ?>
                        <div class="card-body">
                            <?php
                                echo "<h5 class='card-title fw-bold'>{$row['name']}</h5>";
                                echo "<p class='card-text'>{$row['price']}</p>";
                                echo "<div class='d-flex justify-content-around'>";
                                    echo "<a
                                        href='index.php?update=true&name={$row['name']}&price={$row['price']}&id={$row['id']}'
                                        class='btn btn-primary'>تعديل المنتج</a>";
                                    echo "<a
                                        href='products.php?delete=true&id={$row['id']}'
                                        class='btn btn-danger'>حذف المنتج</a>";
                                echo "</div>";
                            ?>
                            
                        </div>
                    </div>
                </div>
                
                <?php endwhile; ?>
            </div>
        </center>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>