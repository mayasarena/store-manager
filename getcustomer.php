<?php
$query = "SELECT * FROM customer ORDER BY lastname";
$result = 
mysqli_query($connection,$query);
if (!$result) {
die("databases query failed.");
}

while ($row = mysqli_fetch_assoc($result)) {
	echo "<option value=".$row["customerid"].">". 
	"customer id: " . $row["customerid"]. " - name: " .
	$row["firstname"]. " " . $row["lastname"] . " - city: " .
	$row["city"]. " - phone number: " . $row["phonenumber"]. 
	" - agent id: " . $row["agentid"]. " </option>";
}
mysqli_free_result($result);

?>
