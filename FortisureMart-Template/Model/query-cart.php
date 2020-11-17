<?php
class Cart {

  // Constructor for db connection
  public function __construct($db) {
    $this->conn = $db;
  }


  //query whether an id exists
  public function checkId($sentName, $sentId) 
  {
    //Prepare query
    $query = "SELECT * FROM customers
                    WHERE contactFirstName = '$sentName' AND customerNumber = $sentId;";
    //Prepare query

    // prepare query statement
    $results = $this->conn->prepare( $query );

    // Execute
    $results->execute();

    //return true if any row was found
    if($results->rowCount() > 0)
    {
        return true;
    }
    else
    {
        return false;
    }

  }

  //insert user's transaction to the appropriate tables
  public function checkout($sentId, $cartArray)
  {

    //get date
    $today = date("Y-m-d");

    //Query for transactions table
        // Prepare Query
        $query = "INSERT INTO transactions 
            (orderDate, employeeNumber, customerNumber, status) 
            VALUES ('$today', NULL, '$sentId', 'Completed');
        ";
        // Prepare Query

        // prepare query statement
        $results = $this->conn->prepare( $query );

        // Execute
        $results->execute();
    //Query for transactions table



    //get transaction number
    $transactionNum = $this->conn->lastInsertId();

    //Query for transactiondetails table
    
        // Prepare Query
        $query = "INSERT INTO transactiondetails 
            (transactionNumber, productCode, quantityPurchased) 
            VALUES ";

        //get length of array
        $cartLen = count($cartArray);

        //Append record for each product
        for($index = 0; $index < $cartLen; $index++)
        {
            //variable for array info
            $prodCode = $cartArray[$index]['code'];
            $prodQty = $cartArray[$index]['qty'];

            //append values to query
            $query = $query . "('$transactionNum', '$prodCode', '$prodQty')";

            //add comma on each except for last
            if($index < $cartLen - 1)
            {
                //add comma
                $query = $query . ", ";
            }

        }
        // Prepare Query

        // prepare query statement
        $results = $this->conn->prepare( $query );

        // Execute
        $results->execute();
    //Query for transactions table

    //clear cart session
    $_SESSION['cart'] = array();
  }

}
?>