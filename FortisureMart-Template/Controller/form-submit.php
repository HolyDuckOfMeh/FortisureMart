<?php

    //check that post items are set
    if(isset($_POST['submit-contact-form'])){
        require './Model/query-customer.php';

        $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

        //variables
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
        //variables

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

        $customer = new Customer($db);
        $customerPurchaseId = $customer->addCustomer($customerData);

        //display alert to thank customer
        echo"
            <script>
                alert('Thank you {$firstName} {$lastName} for submitting your message. We will review it shortly! Your Id is {$customerPurchaseId}. Your email is: {$email}');
            </script>
        ";

        //database ineraction
    }

?>