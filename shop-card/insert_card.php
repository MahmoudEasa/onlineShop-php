<?php
    // ini_set('default_charset', 'UTF-8');
    if(isset($_GET['addToCart'])){
        $id = $_GET['id'];
        $resProduct = mySqlSelectData("products", $id);
        $productData = mysqli_fetch_array($resProduct);
        $resUser = mySqlSelectData("users", 3);
        $userData = mysqli_fetch_array($resUser);

        $userCard;
        $name;
        $price;
        $image;

        if($productData) {
            $name = $productData['name'];
            $price = $productData['price'];
            $image = $productData['image'];
        }

        if($userData) {
            $userCard = $userData['card'];
        }

        $jsonToObject = json_decode($userCard);
        array_push($jsonToObject->userCard, (object)["id" => "$id","name" => "$name", "price" => "$price"]);
    
        $userCard = json_encode($jsonToObject, JSON_UNESCAPED_UNICODE);

        mySqlUpdateData("users", "card='$userCard'", 3);
        header("Location: card.php");
    }