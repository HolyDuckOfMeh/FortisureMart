<?php

    //setting the column variable as the first column is 2
    $colNum = 2;

    //loop to print each coupon in array
        function makeProductCard($prodName, $prodImg, $prodType, $prodDesc, $prodPrice, $colNum){
        echo "
            <div class='product-card-grid'
            style='grid-column: {$colNum};
            grid-row: 1;'>

                <p class='product-header-text'>
                    <span>Fortisure</span>
                    <span>{$prodType}</span>
                </p>
                <img src='./View/Public/Images/Products/{$prodImg}.png'>
                <p class='product-card-desc'>{$prodName}.<br>{$prodDesc}</p>
                <button class='btn-add-to-cart btn btn-success'>
                    Add To Cart | <span>\${$prodPrice}</span>
                </button>
            </div>
        ";
    }

?>