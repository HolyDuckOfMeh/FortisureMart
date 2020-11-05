<?php

    //check that post items are set
    if(isset($_POST['cusName'])){
        //display alert to thank customer
        echo"
            <script>
                alert('Thank you {$_POST['cusName']} for submitting your message. We will review it shortly!');
            </script>
        ";

        //database ineraction


        //finally we clear out data in post
        unset($_POST['cusName']);
        unset($_POST['cusEmail']);
        unset($_POST['cusMessage']);

    }

?>