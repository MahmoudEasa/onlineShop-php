<?php
    $name = strip_tags($_POST["name"]);
    $price = strip_tags($_POST["price"]) . "$";
    $image = "";
    $image_location;
    $image_name;
    $image_up;

    if(isset($_FILES["image"]) && $_FILES["image"]["name"]) {
        $image = $_FILES['image'];
        $image_location = $image['tmp_name'];
        $image_name = $image['name'];
        $image_up = 'images/' . $image_name;
    }