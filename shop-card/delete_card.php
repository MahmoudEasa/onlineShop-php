<?php

    if(isset($_GET['delete'])){
        $resUser = mySqlSelectData("users", 3);
        $userData = mysqli_fetch_array($resUser);
        $userCard;

        if($userData) {
            $userCard = $userData['card'];
        }

        $jsonToObject = json_decode($userCard);
        $filtered = array_filter($jsonToObject->userCard, fn($id) => $id->id != $_GET['id']);
        $jsonToObject->userCard = [...$filtered];
        $userCard = json_encode($jsonToObject, JSON_UNESCAPED_UNICODE);
        mySqlUpdateData("users", "card='$userCard'", 3);
        header("Location: card.php");
    }