<?php
    if(isset($_POST["add"])) {
        require("handleProductData.php");

        if($name && strip_tags($_POST["price"]) != "" && $image) {
            $keys = "name, price, image";
            $values = "'$name', '$price', '$image_up'";
            
            // mySqlInsertData Is a Function I Created In mySQLDatabase.php File
            $query = mySqlInsertData("products", $keys, $values);
            include "ifUploadedFile.php";

            if($query) {
                header("Location: index.php");
            }
        }else {
            echo "<p style='color: red;'>من فضلك أملئ جميع الحقول</p>";
        }
    }
    