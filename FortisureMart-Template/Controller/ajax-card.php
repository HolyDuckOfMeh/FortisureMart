<?php

    //update what's in the cart
    include './update-cart.php';
    
    //print the new information to the cart modal
    include './modal-display.php';

    //display the number of items in the cart
    //declaring total variable
    $itemCount = 0;

    //loop to see how many items are in the cart
    for($index = 0; $index < count($_SESSION['cart']); $index++){
        //add the item's quantity
        $itemCount += $_SESSION['cart'][$index]['qty'];
    };

    //display total to cart qty indicator
    echo "
        <script>
        
        document.getElementById('items-in-cart').innerHTML = {$itemCount};

        </script>"

?>