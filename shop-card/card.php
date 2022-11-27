<?php require("../handleData/mySQLDatabase.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/global.css">
    <title>MyCard</title>
</head>
<body>
    <?php require("../components/Navbar.php"); ?>
    
    <div class="container">
        <center class="mt-4">
            <h2 class="my-4 fw-bold">Your Card</h2>
    
            <div class="row overflow-auto">
                <?php
                    $res = mySqlSelectData("users", 3);
                    $fetchData = mysqli_fetch_array($res);
                    $rows = json_decode($fetchData['card'])->userCard;
                    require("delete_card.php");
                    
                    foreach($rows as $row):
                        echo "
                            <div class='col-lg-9 m-auto mb-2'>
                                <table class='table shadow-sm text-center'>
                                    <thead class='table-success fs-5'>
                                        <tr>
                                            <th scope='col'>Products Name</th>
                                            <th scope='col'>Products Price</th>
                                            <th scope='col'>Delete Product</th>
                                        </tr>
                                    </thead>
                                    <tbody class='fs-5'>
                                        <tr>
                                            <td scope='col'>$row->name</td>
                                            <td scope='col'>$row->price</td>
                                            <td scope='col'><a class='btn btn-danger'
                                                href='card.php?delete=true&id=$row->id'>Delete</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        ";
                    endforeach;
                ?>
            </div>
        </center>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>