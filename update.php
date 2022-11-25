<?php
    require("config.php");
    $name = "";
    $price = "";

    function checkUploaded($query) {
        if($query) {
            header("Location: products.php");
        }else {
            echo "<p style='color: red;'>حدث خطأ .. لم يتم رفع المنتج</p>";
        }
    }

    if(isset($_POST["update"])) {
        require("handleData/handleProductData.php");

        if($name && strip_tags($_POST["price"]) != "" && $image) {
            $queryUpdate = "update products set name='$name',
                price='$price', image='$image_up' where id=$_GET[id]";

            $query = mysqli_query($con, $queryUpdate);
            include "handleData/ifUploadedFile.php";
            checkUploaded($query);
        }elseif($name && strip_tags($_POST["price"]) != "") {
            $queryUpdate = "update products set name='$name',
                price='$price' where id={$_GET['id']}";

            $query = mysqli_query($con, $queryUpdate);
            checkUploaded($query);
        }else {
            echo "<p style='color: red;'>من فضلك أملئ جميع الحقول</p>";
        }
    }elseif(isset($_GET["update"])) {
        $name = $_GET["name"];
        $priceArr = explode("$", $_GET["price"]);
        $price = $priceArr[0];
    }