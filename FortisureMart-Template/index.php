<?php
    include './View/header.php';
    include './Controller/db_conn.php';
    include './Controller/product-cards.php';
    include './Model/query-products.php';
    include './View/navbar.php';

    $database = new Database();
    $db = $database->connect();

    $product = new Product($db);

    $productGet = $product->prodRead();

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

                <?php
                    $colNum = 2;

                    while($row = $productGet->fetch(PDO::FETCH_ASSOC)){
                        // Variables
                            $prodName = $row['productName'];
                            $prodImg = $row['productImage'];
                            $prodType = $row['productType'];
                            $prodDesc = $row['productDescription'];
                            $prodPrice = bcdiv($row['buyPrice'], 1, 2);

                        // Variables

                        makeProductCard($prodName, $prodImg, $prodType, $prodDesc, $prodPrice, $colNum);
                        $colNum++;
                    }

                ?>
            </div>
        <!-- Trending Section -->


<?php

include './View/footer.php';
include './Controller/form-submit.php'
?>
