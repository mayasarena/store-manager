<!-- php script for getting products in order by price -->
<?php
include "connectdb.php";
$query = "SELECT * FROM product ORDER BY cost"; //query to order products by cost
$result = mysqli_query($connection,$query);
if (!$result) {//checking if query failed
	die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) { //getting and displaying info
	echo "<li>";
	echo "PRODUCT ID: " . $row["prodID"]. " - DESCRIPTION: " .
	$row["description"]. " - COST: " .
	$row["cost"]. " - QUANTITY: " . $row["quantityonhand"]."</li>";
}
mysqli_free_result($result);
mysqli_close($connection); //closing connection
echo "</ol>";
?>
