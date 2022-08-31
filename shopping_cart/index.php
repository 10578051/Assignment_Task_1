<?php

require_once('php/CreateDB.php');
require_once ('php/component.php');

/*create instance of Createdb class*/
$database = new CreateDb(dbname:"Shopdb",tablename:"Producttb");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>

    <script src="https://kit.fontawesome.com/641be407cc.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="../assets/css/main.css">

</head>
<body>

<div class="container">
    <div class="row text-center py-5">
        <?php
        component(productname:"Shiai Bench", productprice:"&euro;550", productimg:"./upload/Bench.png");
        component(productname:"Whaiya Chair", productprice:"&euro;350", productimg:"./upload/Chair.png");
        component(productname:"Gridna Soft Light", productprice:"&euro;220", productimg:"./upload/Light.png");
        component(productname:"Zeema Vase", productprice:"&euro;105", productimg:"./upload/Vase.png");
        ?>
    </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>
