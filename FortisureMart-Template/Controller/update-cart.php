<?php

    //start the session
    session_start();

    //if a cart session to hold items does not exist
    if(!isset($_SESSION['cart'])){
        //create thte sssionnat
        $_SESSION['cart'] = array();
    }

    //if a card has just been clocked add item to cart
    if(isset($_POST['code'])){
         //get info out of post
        $prodCode = $_POST['code'];
        $prodName = $_POST['name'];
        $prodImg = $_POST['img'];
        $prodPrice = $_POST['price'];

        //get cart array
        $cartArray = $_SESSION['cart'];

        //variable for the storage index, set to the next open index by default
        $storedIndex = count($cartArray);

        //loop through the cart to see if this item has already been picked
        for($index = 0; $index < count($cartArray); $index++){ 
            //if the item is found to already be stored
            if($cartArray[$index]['code'] == $prodCode){
                $storedIndex = $index;
            }
        }

        //if this item has not been stored before
        if(!isset($cartArray[$storedIndex]['code'])) {
            //store the item info
            $cartArray[$storedIndex]['code'] = $prodCode;
            $cartArray[$storedIndex]['name'] = $prodName;
            $cartArray[$storedIndex]['img'] = $prodImg;
            $cartArray[$storedIndex]['price'] = $prodPrice;

            //set the quantity to 1
            $cartArray[$storedIndex]['qty'] = 1;
        }
        else
        {
            //set the quantity to 1
            $cartArray[$storedIndex]['qty'] += 1;
        }

        //store the art array in the session
        $_SESSION['cart'] = $cartArray;

        //clear the post
        $_POST = array();

    }

?>

