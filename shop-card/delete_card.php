<?php

    if(isset($_GET['delete'])){
        require("../handleData/getUserCard.php");

        $filtered = array_filter($jsonToObject->userCard, fn($product) => $product->id != $_GET['id']);
        $jsonToObject->userCard = [...$filtered];
        $userCard = json_encode($jsonToObject, JSON_UNESCAPED_UNICODE);
        mySqlUpdateData("users", "card='$userCard'", $userId);
        header("Location: card.php");
    }

    if(isset($_GET['deleteAll'])){
        require("../handleData/getUserCard.php");
        
        $jsonToObject->userCard = [];
        $userCard = json_encode($jsonToObject, JSON_UNESCAPED_UNICODE);
        mySqlUpdateData("users", "card='$userCard'", $userId);
        header("Location: card.php");
    }