<?php
    $name = "";
    $price = "";

    function checkUploaded($query) {
        if($query) {
            header("Location: products.php");
        }else {
            echo "<p style='color: red;'>حدث خطأ .. لم يتم رفع المنتج</p>";
        }
    }
    function setNameAndPriceFromGet(&$name, &$price){
        $name = $_GET["name"];
        $priceArr = explode("$", $_GET["price"]);
        $price = $priceArr[0];
    }

    if(isset($_POST["update"])) {
        require("handleProductData.php");

        if($name && strip_tags($_POST["price"]) != "" && $image) {
            $data = "name='$name', price='$price', image='$image_up'";
            $query = mySqlUpdateData("products", $data, $_GET['id']);
            include "ifUploadedFile.php";
            checkUploaded($query);
        }elseif($name && strip_tags($_POST["price"]) != "") {
            $data = "name='$name', price='$price'";
            $query = mySqlUpdateData("products", $data, $_GET['id']);
            checkUploaded($query);
        }else {
            echo "<p style='color: red;'>من فضلك أملئ جميع الحقول</p>";
            setNameAndPriceFromGet($name, $price);
        }
    }elseif(isset($_GET["update"])) {
        setNameAndPriceFromGet($name, $price);
    }