<?php

    if(isset($_GET["delete"])) {
        // mySqlDeleteData Is a Function I Created In mySQLDatabase.php File
        $deleted = mySqlDeleteData("products", $_GET["id"]);

        if($deleted) {
            header("Location: products.php");
        }else {
            echo "<p style='color: red;'>Something is wrong... try again</p>";
        }
    }