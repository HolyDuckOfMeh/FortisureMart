<?php

//check to see if the customer creation from was just submitted
if (isset($_POST['submit-contact-form'])) {
    require './Model/query-customer.php';

  // Used to remove special encoded characters
  // https://www.w3schools.com/php/filter_sanitize_string.asp
  $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

  // Variables
    // Customer Contact Info
      // Trim removes spaces around data example: ' nameHere ' TO-> 'nameHere'
      // htmlentities changes special character like: 
        // '&' TO '&amp;'
        // '<' TO '&lt;'
        // '"' TO '&quot;'
      // and by adding single quotes around the entire string
      // which this helps protect against SQL injection attacks
      $firstName = trim(htmlentities($POST['firstName']));
      $lastName = trim(htmlentities($POST['lastName']));
      $address = trim(htmlentities($POST['address']));
      $city = trim(htmlentities($POST['city']));
      $state = trim(htmlentities($POST['state']));
      $postalCode = trim(htmlentities($POST['postalCode']));
      $country = trim(htmlentities($POST['country']));
      $email = trim(htmlentities($POST['email']));
      $phone = trim(htmlentities($POST['phone']));
      $comments = trim(htmlentities($POST['comments']));
    // Customer Contact Info
  // Variables
  
  // Customer array & db insert
    /* 
      Creates an array that stores gathered information from the form
      and send that array to the query-customer.php page to insert to db
    */
      $customerData = [
        "firstName" => $firstName,
        "lastName" => $lastName,
        "address" => $address,
        "city" => $city,
        "state" => $state,
        "postalCode" => $postalCode,
        "country" => $country,
        "email" => $email,
        "phone" => $phone,
        "comments" => $comments
      ];
    // Customer Info Array

    // Insert info to db
      $customer = new Customer($db);
      $customerPurchaseId = $customer->addCustomer($customerData);
    // Insert info to db
  // Customer array & db insert  

  //display an alert thanking the customer for their account creations
  echo "
  <script>        
      alert('Thank you {$firstName} {$lastName} for creating an account. We will review it shortly! Your ID is {$customerPurchaseId} ');
  </script>";
 
}



//check if shopping cart was just purchased
if (isset($_POST['cartCustomerId']))
{
  //include query class
  require './Model/query-cart.php';

  //get entered name and id
  $enteredId = $_POST['cartCustomerId'];
  $enteredName = $_POST['cartCustomerName'];

  //create query cart object
  $cart = new Cart($db);

  //check if id is in database
  if($cart->checkId($enteredName, $enteredId) && $_SESSION['cart'] != array())
  {
    //get session info (Note the session was already started in update-cart.php)
    $cartArray = $_SESSION['cart'];

    //checkout
    $cart->checkout($enteredId, $cartArray);

  }
  else if($_SESSION['cart'] != array())
  {
    echo "<script>alert('Account not found!')</script>";
  }



}