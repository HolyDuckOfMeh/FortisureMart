<?php

class Customer{
    public function __construct($db){
        $this->conn = $db;
    }

    public function addCustomer($data){
        // variables
            $firstName = $data['firstName'];
            $lastName = $data['lastName'];
            $address = $data['address'];
            $city = $data['city'];
            $state = $data['state'];
            $postalCode = $data['postalCode'];
            $country = $data['country'];
            $email = $data['email'];
            $phone = $data['phone'];
            $comments = $data['comments'];
        // variables

        $query = "INSERT INTO customers (contactLastName, contactFirstName, phone, addressline1, city, state, postalCode, country, email, comments)
                                VALUES ('$lastName', '$firstName', '$phone', '$address', '$city', '$state', '$postalCode', '$country', '$email', '$comments');";

        //prepares query statement
        $results = $this->conn->prepare($query);

        //executes statement
        $results->execute();

        //grabs the last Id created (last row insert)
        return $this->conn->lastInsertId();
    }

}

?>