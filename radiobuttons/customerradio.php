<!-- creating customer radio buttons -->
<?php
$query = "SELECT * FROM customer ORDER BY firstname"; //query to get all customers
$result = mysqli_query($connection,$query); //getting result

if (!$result) { // checking if query failed
	die("databases query failed.");
}

while ($row = mysqli_fetch_assoc($result)) { // iterating to get all customers
	echo "<input type='radio' name='customer' value=".$row["cusID"]." required>". 
	"CUSTOMER ID: " . $row["cusID"]. " - NAME: " .
	$row["firstname"]. " " .$row["lastname"]. "<br>";
}

mysqli_free_result($result);
?>
