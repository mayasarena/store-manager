<?php
 $quantity = $_POST["quantity"]; //get selected museum value from the form

 $query = 'SELECT customer.firstname, customer.lastname, 
	purchases.Quantity, product.description
	FROM customer INNER JOIN purchases ON purchases.cusID = 
	customer.cusID INNER JOIN product ON product.prodID = purchases.prodID
	WHERE purchases.Quantity>"'.$quantity.'"'; 
 $result = mysqli_query($connection, $query);
 if (!$result) {
 	die("databases query on products failed. ");
 }
 echo "<ul>"; //put the artwork in an unordered bulleted list
if ($result->num_rows > 0) {
	while ($row = mysqli_fetch_assoc($result)){
		echo "<li>". "customer name: " . $row["firstname"] . 
		$row["lastname"] . " - description: "
		. $row["description"] . " - quantity: " . $row["Quantity"] .
		 "</li>";
	}
}
else{
	echo "no customers purchased a quantity of products larger than " . $quantity;
}
 echo "</ul>"; //end the bulleted list
 mysqli_free_result($result);
?>
