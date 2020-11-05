<?php

    include './View/header.php';
    include './View/navbar.php';


?>

        <!-- Informational Section - Internal styles -->
            <div class='our-info-grid'>
                <!-- Left Text -->
                    <div class="info-text-left">
                        <p>Reasons to Choose FortisureMart:</p>

                        <!-- Un-ordered List -->
                            <ul>
                                <li>
                                    Provides quality goods at affordable prices
                                </li>
                                <li>
                                    We internally train our employees so they are the highest quality
                                </li>
                                <li>
                                    We use the latest technologies to surpass the competition
                                </li>
                            </ul>
                        <!-- Un-ordered List -->
                    </div>
                <!-- Left Text -->
                
                <!-- Right Text -->
                    <div class="info-text-right">
                        <h4>Mission Statement:</h4>
                        <p>To build a nationally respected marketplace that utilizes the latest technologies to add great value to our customers</p>
                    </div>
                <!-- Right Text -->
            </div>
        <!-- Informational Section -->

        <!-- Trending Section - External Styles -->
            <div class='trending-container-grid'>
                <h2>Trending Products</h2>
                <!-- Card 1 -->
                    <div class='product-card-grid'>
                        <p class='product-header-text'>
                            <span>Fortisure</span>
                            <span>Shoes</span>
                        </p>
                        <img src='./View/Public/Images/Products/shoes-white.jpg'>
                        <p class='product-card-desc'>The best shoes around.</p>
                        <button class='btn-add-to-cart btn btn-success'>
                            Add To Cart | <span>$64.99</span>
                        </button>
                    </div>
                <!-- Card 1 -->

                <!-- Card 2 -->
                    <div class='product-card-grid'>
                        <p class='product-header-text'>
                            <span>Fortisure</span>
                            <span>Shirt</span>
                        </p>
                        <img src='./View/Public/Images/Products/t-shirt-black.jpg'>
                        <p class='product-card-desc'>A nice fitting shirt</p>
                        <button class='btn-add-to-cart btn btn-success'>
                            Add To Cart | <span>$14.99</span>
                        </button>
                    </div>
                <!-- Card 2 -->
                
                <!-- Card 3 -->
                    <div class='product-card-grid'>
                        <p class='product-header-text'>
                            <span>Fortisure</span>
                            <span>Jeans</span>
                        </p>
                        <img src='./View/Public/Images/Products/jeans-black.jpg'>
                        <p class='product-card-desc'>Water resistant pants for every occasion</p>
                        <button class='btn-add-to-cart btn btn-success'>
                            Add To Cart | <span>$19.99</span>
                        </button>
                    </div>
                <!-- Card 3 -->
            </div>
        <!-- Trending Section -->


<?php

include './View/footer.php';

?>
