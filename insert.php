<?php
    require("config.php");

    if(isset($_POST["add"])) {
        require("handleData/handleProductData.php");

        if($name && strip_tags($_POST["price"]) != "" && $image) {
            $queryInsert = "insert into products(name, price, image)
                            value('$name', '$price', '$image_up')";
            $query = mysqli_query($con, $queryInsert);
            include "handleData/ifUploadedFile.php";

            if($query) {
                header("Location: index.php");
            }
        }else {
            echo "<p style='color: red;'>من فضلك أملئ جميع الحقول</p>";
        }
    
    }

    