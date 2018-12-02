<!-- php script for getting all customer information -->
<?php
$query = "SELECT * FROM customer ORDER BY lastname"; //query to get all info
$result = 
mysqli_query($connection,$query);
if (!$result) {//check if query failed
	die("databases query failed.");
}
//iterate to get all customer info
while ($row = mysqli_fetch_assoc($result)) {
	echo "<input type='radio' name='customerinfo' value=".$row["cusID"].">". 
	"CUSTOMER ID: " . $row["cusID"]. " - NAME: " .
	$row["firstname"]. " " . $row["lastname"] . " - CITY: " .
	$row["city"]. " - PHONE NUMBER: " . $row["phonenumber"]. 
	" - AGENT ID: " . $row["agentID"]. "<br> </option>";
}
mysqli_free_result($result);

?>
