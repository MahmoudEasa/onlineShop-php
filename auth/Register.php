<?php

    $keys = "username, email, password, phone, isAdmin, card";
    $card = '{"userCard":[]}';
    $passHash = password_hash("123456", PASSWORD_DEFAULT);
    $values = "'Admin', 'mu01011422865@gmail.com', '$passHash', '01011422865', true, '$card'";