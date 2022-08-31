<?php

function component($productname, $productprice, $productimg, $productid){
    $element = "

    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"index.php\" method=\"post\">
        <div class=\"card shadow\">
            <div>
                <img src=\"$productimg\" alt=\"Two person bench in a living room\" class=\"img-fluid card-img-top\"></div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">$productname</h5>
                <h6>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"far fa-star\"></i>
                </h6>
                <p class=\"card-text\">A bespoke ceramic vase with curved handles.</p>
                <h5>
                    <span class=\"price\">$productprice</span>
                </h5>
                <button type=\"submit\" class=\"btn my-3\" name=\"add\">Add to Cart</button>
                <input type='hidden' name='product_id' value='$productid'>
            </div>
        </div>
    </form>
    </div>

    ";
    echo $element;
}
