<!-- php script for adding customer -->
<?php
        //getting variables
        $customerid=$_POST["customerid"];
        $firstname=$_POST["firstname"];
        $lastname=$_POST["lastname"];
        $city=$_POST["city"];
        $phone=$_POST["phone"];
        $agentid=$_POST["agentid"];    
        $customerExists= 'SELECT * FROM customer WHERE 
        cusID="'.$customerid.'"'; //query to see if cusID exists
        $customerResult=mysqli_query($connection,$customerExists);
        if (!$customerResult) {//checking if query failed
                die("database query failed.");
        }   
        //checking if customer id exists
        if ($customerResult->num_rows>0){
                echo "Customer ID already exists. Please select another one.";
        }   
        //adding customer
        else {
                $insertCustomer = 'INSERT INTO customer (cusID, firstname, lastname,
                city, phonenumber, agentID) VALUES("'.$customerid.'",
                "'.$firstname.'","'.$lastname.'","'.$city.'",
                "'.$phone.'","'.$agentid.'")';
                if (!mysqli_query($connection, $insertCustomer)) {
                        die("Error: insert failed" . mysqli_error($connection));
                }
                echo "New customer has been inserted with values CUSTOMER ID: " .
                $customerid . ", FIRST NAME: " . $firstname .", LAST NAME: " .$lastname.
                ", CITY: " .$city. ", PHONE NUMBER: " .$phone. ", and AGENT ID: " .$agentid;
        }
        mysqli_close($connection);
?>
