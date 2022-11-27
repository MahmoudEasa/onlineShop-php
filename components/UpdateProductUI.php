<?php
    echo "<label for='name'>Product Name</label>";
    echo "<input type='text' id='name' name='name'
        value='$name'>";
    echo "<label for='price'>Price</label>";
    echo "<input type='text' id='price' name='price'
        value='$price'>";
    echo "<label for='file'>Choose Image</label>";
    echo "<input type='file' id='file' name='image'>";
    echo "<button class='button' name='update'>✅ Update</button>";
    echo "<br>";
    echo "<a class='view-all-products' style='margin-left: 5px;' href='products.php'>View All Products</a> Or ";
    echo "<a class='add-product' href='index.php'>Add Product</a>";
