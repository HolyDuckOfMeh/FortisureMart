        <!-- Navigation Bar - Inline styles -->
        <div class='navbar-grid'>
            <button class='btn-shop btn btn-primary' onclick="location.href='?'">
            Shop</button>
                    
            <h1 class='fortisuremart-logo'>

                <span style='color: #3B3A6D;' class='header-title' data-large="Fortisure" data-small="F"></span><span style='color: #9F1224;' class='header-title' data-large="Mart" data-small="M"></span>

            </h1>
            

            <div class='cart-container'>

                <?php
                    //total variable
                    $itemCount = 0;

                    for($index = 0; $index < count($_SESSION['cart']); $index++){
                        //add item's quantity
                        $itemCount += $_SESSION['cart'][$index]['qty'];   
                    }

                    //display how many items are in the cart
                    echo "<sub class='items-in-cart' id='items-in-cart'>{$itemCount}</sub>";
                ?> 
                 <img class='shopping-cart-img' src='./View/Public/Images/shopping-cart.png' data-toggle='modal' data-target='#modal-users-cart'>

            </div>
        </div>
        <!-- Navigation Bar -->


        <!-- Cart Modal -->
            <div class='modal fade' id='modal-users-cart' role='dialog'>
                <div class='modal-dialog'>
                    <!-- Modal Content -->
                        <div class='modal-content'>

                            <!-- Modal Header -->
                                <div class='modal-header'>
                                    <!-- title -->
                                    <h4 class='modal-title'>Your Cart</h4>

                                    <!-- closing 'X' Button -->
                                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                </div>
                            <!-- Modal Header -->

                            <!-- Modal Body -->
                                <div class='modal-body' id='modal-body'>
                                    <?php
                                        include './Controller/modal-display.php';
                                    ?>
                                </div>
                            <!-- Modal Body -->

                            <!-- Modal Footer -->
                                <div class='modal-footer'>
                                    <!-- Second close button -->
                                    <button type="button" class="btn btn-default" data-dismiss='modal'>Close</button>
                                    <!-- Form -->
                                        <form action="" method="post">
                                            <label for="nameinput">First Name</label>
                                            <input id="nameInput" name="cartCustomerName" style="width: 150px">

                                            <label for="idinput">ID</label>
                                            <input id="idInput" name="customerId" style="width: 45px; margin-right: 50px">

                                            <button type="submit" class="btn btn-primary">Purchase</button>
                                        </form>
                                    <!-- Form -->
                                </div>
                            <!-- Modal Footer -->
                        </div>
                    <!-- Modal Content -->
                </div>
            </div>


        <!-- Cart Modal -->