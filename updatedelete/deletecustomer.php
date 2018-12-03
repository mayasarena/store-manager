<!-- php script for deleting a customer -->
<?php
$whichCustomer = $_POST["pickacustomer3"]; //get selected customer

$query = 'DELETE FROM customer WHERE cusID = "'.$whichCustomer.'"';//query for deleting customer 
$result = mysqli_query($connection, $query);
if (!$result) {//if query fails
	die("Cannot delete this customer because they have a purchases record.");
}//otherwise customer has been succesfully deleted
else{
	echo "Customer with ID " . $whichCustomer . " has been successfully deleted.";
}

mysqli_close($connection); //closing connection
?>
