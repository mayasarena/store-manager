<!-- get the chosen customers phone number -->
<?php
$whichCustomer = $_POST["pickacustomer2"]; //get selected value from the form
$query = 'SELECT phonenumber FROM customer WHERE cusID = "'.$whichCustomer.'"'; 
$result = mysqli_query($connection, $query);
if (!$result) {//check if query failed
 	die("databases query on products failed. ");
}

while ($row = mysqli_fetch_assoc($result)){//display phone number
	echo  "Customer's Current Phone Number:" . $row["phonenumber"];
}

mysqli_free_result($result);
?>
