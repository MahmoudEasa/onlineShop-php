<?php
    $userId = 3;
    require("../handleData/mySQLDatabase.php");
    require("delete_card.php");
    require("productCount.php");

    $res = mySqlSelectData("users", $userId);
    $fetchData = mysqli_fetch_array($res);
    $rows = json_decode($fetchData['card'])->userCard;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/global.css">
    <title>MyCard</title>
    <style>
        table {
            min-width: 900px;
        }
    </style>
</head>
<body>
    <?php require("../components/Navbar.php"); ?>
    
    <div class="container">
        <center class="mt-4">
            <h2 class="my-4 fw-bold">Your Card</h2>
    
            <div class='overflow-auto m-auto mb-2'>
                <?php if(count($rows) > 0) { ?>
                    <table class='table shadow-sm text-center'>
                        <thead class='table-dark fs-5'>
                            <tr>
                                <th scope='col'>Image</th>
                                <th scope='col'>Products Name</th>
                                <th scope='col'>Price</th>
                                <th scope='col'>Number</th>
                                <th scope='col'>Total</th>
                                <th scope='col'>Action</th>
                            </tr>
                        </thead>
                        <tbody class='fs-5'>
                            <?php
                                $totalAllPrice = 0;
                                foreach($rows as $row):
                                    @$totalPriceRow = $row->price * $row->count;
                                    $totalAllPrice += $totalPriceRow;
                                    echo "
                                        <tr class='bg-white'>
                                            <td class='align-middle' scope='col'><img src='../$row->image' class='rounded d-block' style='width: 100px; height: 70px;' alt='Product-img'></td>
                                            <td class='align-middle' scope='col'>$row->name</td>
                                            <td class='align-middle' scope='col'>$row->price</td>
                                            <td class='align-middle' scope='col'>
                                                <a
                                                    href='card.php?decrease=true&id=$row->id'
                                                    class='btn btn-warning'>-</a>
                                                $row->count
                                                <a
                                                    href='card.php?increase=true&id=$row->id'
                                                    class='btn btn-warning'>+</a>
                                            </td>
                                            <td class='align-middle' scope='col'>$totalPriceRow$</td>
                                            <td class='align-middle' scope='col'><a class='btn btn-danger'
                                                href='card.php?delete=true&id=$row->id'>Delete</a></td>
                                        </tr>
                                    ";
                                endforeach;
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan='4'>Total</th>
                                <th><?php echo $totalAllPrice; ?>$</th>
                                <th class='align-middle' scope='col'><a class='btn btn-danger'
                                    href='card.php?deleteAll=true'>Delete All</a></th>
                            </tr>
                        </tfoot>
                    </table>
                <?php
                    }else {
                        echo "Your Card Is Empty";
                    }
                ?>
            </div>
        </center>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>