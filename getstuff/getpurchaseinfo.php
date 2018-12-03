<!-- php script for getting purchase information -->
<?php
$productid= $_POST["product"]; //get selected value from the form

$query = 'SELECT SUM(purchases.Quantity) AS totalpurchased, 
	product.description, (product.cost*SUM(purchases.Quantity)) AS 
	totalmoney FROM product INNER JOIN purchases ON 
	purchases.prodID=product.prodID WHERE product.prodID = "'.$productid.'"
	GROUP BY purchases.prodID'; //query to get all the information 
 
$result = mysqli_query($connection, $query);
if (!$result) {//check if query failed
 	die("databases query on failed. ");
}
if ($result->num_rows > 0) {//checking if product has been purchased
	while ($row = mysqli_fetch_assoc($result)){//iterating to display info
		echo "TOTAL # OF PURCHASES: " . $row["totalpurchased"] . 
		" - DESCRIPTION: " . $row["description"] . 
		" - TOTAL $ MADE: " . $row["totalmoney"];
	}
}
else{//otherwise product has not been purchased
	echo "This product has not been purchased by anybody.";
}
mysqli_free_result($result);
mysqli_close($connection); //closing connection
?>
