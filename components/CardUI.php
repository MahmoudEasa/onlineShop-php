<?php

    function cardUI($row, $buttonsCount) {
        $buttons = "";
        $img = "";
        
        if($buttonsCount == "products"){
            $buttons = "
                <a
                    href='index.php?update=true&name={$row['name']}&price={$row['price']}&id={$row['id']}'
                    class='btn btn-primary px-4'>Edit</a>
                <a
                    href='products.php?delete=true&id={$row['id']}'
                    class='btn btn-danger'>Delete</a>";

            $img = "
                <img src='{$row['image']}'
                class='card-img-top' alt='product-img'
                style='width: 18rem; height: 13rem;'>";
        }else {
            if(isset($_GET['search'])) {
                $buttons = "
                    <a
                        href='shop.php?search=". $_GET['search'] ."&addToCart=true&id={$row['id']}'
                        class='btn btn-success'>Add To Card</a>";
            }else {
                $buttons = "
                    <a
                        href='shop.php?addToCart=true&id={$row['id']}'
                        class='btn btn-success'>Add To Card</a>";
            }
            $img = "
                <img src='../{$row['image']}'
                class='card-img-top' alt='product-img'
                style='width: 18rem; height: 13rem;'>";
        }

        return "<div class='cal-12 col-lg-5 col-xl-4 m-auto'>
                    <div class='card mb-3' style='width: 18rem;'>
                        ". $img ."
                        <div class='card-body'>
                            <h5 class='card-title fw-bold'>{$row['name']}</h5>
                            <p class='card-text'>{$row['price']}</p>
                            <div class=''>
                                ". $buttons ."
                            </div>
                        </div>
                    </div>
                </div>";
    }