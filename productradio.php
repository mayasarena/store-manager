<?php
$query = "SELECT * FROM product ORDER BY description";
$result = 
mysqli_query($connection,$query);
if (!$result) {
die("databases query failed.");
}

while ($row = mysqli_fetch_assoc($result)) {
	echo "<input type='radio' name='product' value=".$row["productid"].">". 
	"productid: " . $row["productid"]. " - product description: " .
	$row["description"]. "<br>";
}
mysqli_free_result($result);

?>
