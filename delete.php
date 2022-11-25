<?php

    require("config.php");

    if(isset($_GET["delete"])) {
        echo $_GET["delete"];
        $id = $_GET["id"];
        $queryDelete = "delete from products where id=$id";
        $deleted = mysqli_query($con, $queryDelete);

        if($deleted) {
            header("Location: products.php");
        }else {
            echo "<p style='color: red;'>حدث خطأ .. لم يتم حذف المنتج</p>";
        }
    }