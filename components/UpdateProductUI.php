<?php
    echo "<label for='name'>أسم المنتج</label>";
    echo "<input type='text' id='name' name='name'
        value='$name'>";
    echo "<label for='price'>سعر المنتج</label>";
    echo "<input type='text' id='price' name='price'
        value='$price'>";
    echo "<label for='file'>تحديث صورة للمنتج</label>";
    echo "<input type='file' id='file' name='image'>";
    echo "<button class='button' name='update'>✅ تعديل المنتج</button>";
    echo "<br>";
    echo "<a class='view-all-products' style='margin-left: 5px;' href='products.php'>عرض كل المنتجات</a> أو ";
    echo "<a class='add-product' href='index.php'>إضافة منتج</a>";
