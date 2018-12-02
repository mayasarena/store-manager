<!-- creating product radio buttons -->
<?php
include "connectdb.php"; //connecting to db
$query = "SELECT * FROM product ORDER BY description"; //query to get 
							// all products
$result = mysqli_query($connection,$query); // getting result

if (!$result) { // checking if query failed
	die("databases query failed.");
}

while ($row = mysqli_fetch_assoc($result)) { // iterating to get all products
	echo "<input type='radio' name='product' value=".$row["prodID"]." required>". 
	"PRODUCT ID: " . $row["prodID"]. " - PRODUCT DESCRIPTION: " .
	$row["description"]. "<br>";
}

mysqli_free_result($result);
?>
