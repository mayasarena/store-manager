<?php
$query = "SELECT * FROM product ORDER BY cost";
$result = 
mysqli_query($connection,$query);
if (!$result) {
die("databases query failed.");
}

echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
	echo "<li>";
	echo "product id: " . $row["prodID"]. " - description: " .
	$row["description"]. " - cost: " .
	$row["cost"]. " - quantity: " . $row["quantityonhand"]."</li>";
}
mysqli_free_result($result);
echo "</ol>";
?>
