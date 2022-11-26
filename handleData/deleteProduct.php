<?php

    if(isset($_GET["delete"])) {
        $deleted = mySqlDeleteData("products", $_GET["id"]);

        if($deleted) {
            header("Location: products.php");
        }else {
            echo "<p style='color: red;'>حدث خطأ .. لم يتم حذف المنتج</p>";
        }
    }