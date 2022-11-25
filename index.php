<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <center>
        <div class="main">
            <form method="post" enctype="multipart/form-data">
                <?php
                    require("insert.php");
                    require("update.php");
                
                    if(isset($_GET["update"])) {
                        echo "<h2>تعديل المنتج</h2>";
                    }else {
                        echo "<h2>موقع تسويقي أونلاين</h2>";
                        echo "<img src='images/logo.webp' alt='Logo' width='450px'><br>";
                    }
                
                    echo "<label for='name'>أسم المنتج</label><br>";
                    echo "<input type='text' id='name' name='name'
                        value='$name'><br>";
                    echo "<label for='price'>سعر المنتج</label><br>";
                    echo "<input type='text' id='price' name='price'
                        value='$price'><br>";
                    echo "<input type='file' id='file' name='image'>";

                    if(isset($_GET["update"])){
                        echo "<label for='file'>تحديث صورة للمنتج</label>";
                        echo "<button class='button' name='update'>✅ تعديل المنتج</button>";
                        echo "<br><br>";
                        echo "<a class='view' style='margin-left: 5px;' href='products.php'>عرض كل المنتجات</a>";
                        echo "<a class='add' href='index.php'>إضافة منتج</a>";
                    }else {
                        echo "<label for='file'>أختيار صورة للمنتج</label>";
                        echo "<button class='button' name='add'>✅ إضافة المنتج</button>";
                        echo "<br><br>";
                        echo "<a class='view' href='products.php'>عرض كل المنتجات</a>";
                    }
                ?>
                
            </form>
        </div>
        <p>Developer By Mahmoud Easa</p>
    </center>
    <script src="js/index.js"></script>
</body>
</html>