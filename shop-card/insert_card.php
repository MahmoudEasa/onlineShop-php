<?php
    require("../functions/myFunctions.php");

    if(isset($_GET['addToCart'])){
        $id = $_GET['id'];
        $resProduct = mySqlSelectData("products", $id);
        $productData = mysqli_fetch_array($resProduct);
        $name;
        $price;
        $image;

        if($productData) {
            $name = $productData['name'];
            $price = $productData['price'];
            $image = $productData['image'];
        }

        require("../handleData/getUserCard.php");
        
        $findObj = searchObjInArr($jsonToObject->userCard, $id);

            if($findObj == -1){
                array_push($jsonToObject->userCard, (object)["id" => "$id", "count" => 1,"name" => "$name", "price" => "$price", "image" => "$image"]);
            }else {
                header("Location: card.php");
                exit();
            }
    
        $userCard = json_encode($jsonToObject, JSON_UNESCAPED_UNICODE);

        mySqlUpdateData("users", "card='$userCard'", $userId);
        header("Location: card.php");
    }