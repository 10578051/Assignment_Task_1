<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <script src="https://kit.fontawesome.com/641be407cc.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="../assets/css/main.css">

</head>
<body class="bg-light">

<?php
    require_once('header.php')
?>
    
<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
            <h6>My Shopping Cart</h6>
            <hr>

            <form action="cart.php" method="get" class="cart-items">
                <div class="border rounded">
                    <div class="row bg-white">
                        <div class="col-md-3">
                            <img src="upload/Bench.png" alt="Bench" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <h5 class="pt-2">Product1</h5>
                            <small class="text-secondary">Seller:dailytuition</small>
                            <h5 class="pt-2">$599</h5>
                            <button type="submit" class="btn btn-warning">Save for Later</button>
                            <button type="submit" class="btn btn-danger mx-2" name="remove">Remove</button>
                        </div>
                        <div class="col-md-3 py-5">
                            <div>
                                <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-minus"></i></button>
                                <input type="text" value="1" class="form-control w-25 d-inline">
                                <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="col-md-5"></div>


    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>