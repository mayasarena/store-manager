<!-- php script for getting the customer's product -->
<?php
 $whichCustomer = $_POST["customerinfo"]; //get selected custome id from the form

 $query = 'SELECT product.prodID, description, cost, purchases.Quantity 
	FROM 
	product INNER JOIN purchases ON purchases.prodID = 
	product.prodID WHERE purchases.cusID = "'.$whichCustomer.'"'; //query for getting their purchased products
$result = mysqli_query($connection, $query);
if (!$result) {//checking if query failed
 	die("databases query failed. ");
}
echo "<ul>"; //put the purcahses in an unordered bulleted list
if ($result->num_rows > 0) { //if customer has purchased anything
	while ($row = mysqli_fetch_assoc($result)){
		echo "<li>". "PRODUCT ID: " . $row["prodID"] . 
		" - DESCRIPTION: "
		. $row["description"] . " - COST: " . $row["cost"] . 
		" - QUANTITY: "
		. $row["Quantity"] . "</li>";//display everything
	}
}
else{//if customer has not purchased anything
	echo "This customer has not purchased any product.";
}
echo "</ul>"; //end the bulleted list
mysqli_free_result($result);
mysqli_close($connection); //closing connection
?>
