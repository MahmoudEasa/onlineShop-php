<?php
    if(move_uploaded_file($image_location, $image_up)){
        echo "<p style='color: green; font-weight: bold;'>Product uploaded successfully</p>";
    }else {
        echo "<p style='color: red;'>Something is wrong... try again</p>";
    }
