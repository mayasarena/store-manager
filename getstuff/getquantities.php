<!-- php script to get customers who bought more than given quantity -->
<?php
$quantity = $_POST["quantity"]; //get selected quantity value from the form

$query = 'SELECT customer.firstname, customer.lastname, 
	purchases.Quantity, product.description
	FROM customer INNER JOIN purchases ON purchases.cusID = 
	customer.cusID INNER JOIN product ON product.prodID = purchases.prodID
	WHERE purchases.Quantity>"'.$quantity.'"'; //query to get info
$result = mysqli_query($connection, $query);
if (!$result) {//check if query failed
 	die("databases query failed. ");
}
echo "<ul>"; 
if ($result->num_rows > 0) {//check if customer purchased anything larger than quantity 
	while ($row = mysqli_fetch_assoc($result)){//prints info
		echo "<li>". "CUSTOMER NAME: " . $row["firstname"] . 
		" " . $row["lastname"] . " - DESCRIPTION: "
		. $row["description"] . " - QUANTITY: " . $row["Quantity"] .
		 "</li>";
	}
}
else{//otherwise:
	echo "No customers purchased a quantity of products larger than " . $quantity;
}
echo "</ul>"; //end the bulleted list
mysqli_free_result($result);
mysqli_close($connection); //closing connection
?>
