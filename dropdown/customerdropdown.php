<?php
$query = "SELECT * FROM customer ORDER BY lastname";
$result = 
mysqli_query($connection,$query);
if (!$result) {
die("databases query failed.");
}

while ($row = mysqli_fetch_assoc($result)) {
	echo "<option value=".$row["cusID"].">". 
	"ID " .$row["cusID"]. ": " . $row["firstname"]. " " 
	. $row["lastname"] . " </option>";
}
mysqli_free_result($result);

?>
