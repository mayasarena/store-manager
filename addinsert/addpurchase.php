<!-- php script for adding a purchase -->
<?php
        //getting variables
        $whichCustomer= $_POST["customer"];
        $whichProduct= $_POST["product"];
        $quantity=$_POST["quantity"];
        $query1= 'SELECT * FROM purchases WHERE 
        cusID="'.$whichCustomer.'" AND prodID="'.$whichProduct.'"';
        $result=mysqli_query($connection,$query1);
        if (!$result) { //checking if query failed
                die("database query failed.");
        }   
        //checking if customer already bought the product
        if ($result->num_rows>0){
                $row=mysqli_fetch_assoc($result);
                $newQuantity = intval($row["Quantity"]) + $quantity;
                $newQuantity2= (int)$newQuantity; //quantity added to old one
                $query2 = 'UPDATE purchases SET Quantity="'.$newQuantity2.'" WHERE
                cusID="'.$whichCustomer.'" AND prodID=
                "'.$whichProduct.'"'; //adding new quantity to database
                if (!mysqli_query($connection, $query2)) {
                        die("Error: update failed" . mysqli_error($connection));
                }           
                echo "Purchase quantity has been updated with values CUSTOMER ID: " .
                $whichCustomer . ", PRODUCT ID: " . $whichProduct .", and 
                QUANTITY: " .$newQuantity2; //print statement to confirm update
        }           
        //otherwise we make a new purchase entry
        else {
                $query3 = 'INSERT INTO purchases VALUES("'.$whichCustomer.'",
                "'.$whichProduct.'","'.$quantity.'")'; //query to insert new purchase   
                if (!mysqli_query($connection, $query3)) {//checking if query failed
                        die("Error: insert failed" . mysqli_error($connection));
                }
                echo "New purchase has been inserted with values CUSTOMER ID: " .
                $whichCustomer . ", PRODUCT ID: " . $whichProduct .", and 
                QUANTITY: " .$quantity;//print statement to confirm insert
        }
        mysqli_close($connection);//closing connection
?>
