<?php
$query = "SELECT * FROM customer ORDER BY lastname";
$result = 
mysqli_query($connection,$query);
if (!$result) {
die("databases query failed.");
}

while ($row = mysqli_fetch_assoc($result)) {
	echo "<input type='radio' name='customerinfo' value=".$row["cusID"].">". 
	"Customer ID: " . $row["cusID"]. " ● Name: " .
	$row["firstname"]. " " . $row["lastname"] . " ● City: " .
	$row["city"]. " ● Phone Number: " . $row["phonenumber"]. 
	" ● Agent ID: " . $row["agentID"]. "<br> </option>";
}
mysqli_free_result($result);

?>
