<?php
 $whichCustomer = $_POST["pickacustomer2"]; //get selected value from the form
$query = 'SELECT phonenumber FROM customer WHERE cusID = "'.$whichCustomer.'"'; 
 $result = mysqli_query($connection, $query);
 if (!$result) {
 die("databases query on products failed. ");
 }
 echo "<ul>"; 
while ($row = mysqli_fetch_assoc($result)){
	echo  "Customer's Current Phone Number:" . $row["phonenumber"];
}
 echo "</ul>"; //end the bulleted list
 mysqli_free_result($result);
?>
