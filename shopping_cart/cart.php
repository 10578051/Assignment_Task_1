<?php

session_start();

require_once ("php/CreateDB.php");
require_once ("php/component.php");

$db = new CreateDb(dbname:"Shopdb",tablename:"Producttb");

if(isset($_POST['remove'])){
    if ($_GET['action'] == 'remove'){
        foreach($_SESSION['cart'] as $key => $value){
            if($value["product_id"] == $_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('product has been removed')</script>";
                echo "<script>window.location='cart.php'</script>";
            }
        }
    }
}


?>

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

            <?php

            $total = 0;

            if (isset($_SESSION['cart'])){
                $product_id = array_column($_SESSION['cart'], 'product_id');
            
                $result = $db->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    foreach($product_id as $id){
                        if ($row['id'] == $id){
                            cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['id']);
                            $total = $total + (int)$row['product_price'];
                        }
                    }       
                } 
            }else{
                echo"<h5>Cart is Empty</h5>";
            }  

            ?>

        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                <div class="col-md-6">
                    <?php
                    if (isset($_SESSION['cart'])){
                        $count = count($_SESSION['cart']);
                        echo "<h6>Price ($count items)</h6>";
                    }   else{
                        echo "<h6>Price (0 items)</h6>";
                    }
                    ?>

                    <h6>Delivery Charges</h6>
                    <hr>
                    <h6>Amount Payable</h6>
                </div>
                <div class="col-md-6">
                    <h6>€<?php echo $total; ?></h6>
                    <h6 class="text-success">FREE</h6>
                    <hr>
                    <h6>$<?php
                    echo $total;
                    ?></h6>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>