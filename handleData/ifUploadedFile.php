<?php
    if(move_uploaded_file($image_location, $image_up)){
        echo "<p style='color: green; font-weight: bold;'>تم رفع المنتج بنجاح</p>";
    }else {
        echo "<p style='color: red;'>حث خطأ .. لم يتم رفع المنتج</p>";
    }
