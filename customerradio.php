<?php
$query = "SELECT * FROM customer ORDER BY firstname";
$result = 
mysqli_query($connection,$query);
if (!$result) {
die("databases query failed.");
}

while ($row = mysqli_fetch_assoc($result)) {
	echo "<input type='radio' name='customer' value=".$row["customerid"].">". 
	"customer id: " . $row["customerid"]. " - name: " .
	$row["firstname"]. $row["lastname"]. "<br>";
}
mysqli_free_result($result);

?>
