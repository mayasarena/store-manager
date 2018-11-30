<?php
$whichCustomer = $_POST["pickacustomer3"]; //get selected museum value from the form
echo $whichCustomer;

$query = 'DELETE FROM customer WHERE cusID = "'.$whichCustomer.'"'; 
$result = mysqli_query($connection, $query);
if (!$result) {
	die("Cannot delete this customer because they have a purchases record.");
}
else{
	echo "Customer with ID" . $whichCustomer . "succesfully deleted.";
}
?>
