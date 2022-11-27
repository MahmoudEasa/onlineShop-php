<?php
    $resUser = mySqlSelectData("users", $userId);
    $userData = mysqli_fetch_array($resUser);
    $userCard;

    if($userData) {
        $userCard = $userData['card'];
    }

    $jsonToObject = json_decode($userCard);
