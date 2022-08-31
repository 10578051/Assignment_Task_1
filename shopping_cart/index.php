<?php

/*Start Session*/
session_start();

require_once('php/CreateDB.php');
require_once ('php/component.php');

/*create instance of Createdb class*/
$database = new CreateDb(dbname:"Shopdb",tablename:"Producttb");

if(isset($_POST['add'])){
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already in the cart!')</script>";
            echo "<script>window.location='index.php</script>";
        }else{

            $count=count($_SESSION['cart']);        
            $item_array=array(
                'product_id'=>$_POST['product_id']
            );

            $_SESSION['cart'][$count]=$item_array;
        }

    }   else{

        $item_array = array(
            'product_id' =>$_POST['product_id']
        );

        }

        /*Create a new session variable*/
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);


    } 
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

<?php require_once ("header.php") ?>

<div class="container">
    <div class="row text-center py-5">
        <?php
            $result=$database->getData();
            while($row=mysqli_fetch_assoc($result)){
                component($row['product_name'], $row['product_price'], $row['product_image'],$row['id']);
            }
        ?>
    </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>
