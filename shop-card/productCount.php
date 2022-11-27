<?php
    require("../functions/myFunctions.php");
    if(isset($_GET['increase']) || isset($_GET['decrease'])){
        $id = $_GET['id'];
    
        require("../handleData/getUserCard.php");

        $filterProduct = array_filter($jsonToObject->userCard, fn($product) => $product->id == $id);
        
        // searchObjInArr is a function I created in functions direction
        $index = searchObjInArr($jsonToObject->userCard, $id);
        
        if(isset($_GET['increase'])) {
            $filterProduct[$index]->count += 1;
        }

        if(isset($_GET['decrease'])) {
            if($filterProduct[$index]->count > 1) {
                $filterProduct[$index]->count -= 1;
            }else {
                $filterProduct[$index]->count = 1;
            }
        }
        
        $jsonToObject->userCard[$index] = $filterProduct[$index];
        $userCard = json_encode($jsonToObject, JSON_UNESCAPED_UNICODE);

        mySqlUpdateData("users", "card='$userCard'", $userId);
        header("Location: card.php");
    }