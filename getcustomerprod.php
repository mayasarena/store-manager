<?php
 $whichCustomer = $_POST["pickacustomer"]; //get selected museum value from the form
echo $whichCustomer;

 $query = 'SELECT product.productid, description, cost, purchased.quantity 
	FROM 
	product INNER JOIN purchased ON purchased.productid = 
	product.productid WHERE purchased.customerid = "'.$whichCustomer.'"'; 
 $result = mysqli_query($connection, $query);
 if (!$result) {
 die("databases query on products failed. ");
 }
 echo "<ul>"; //put the artwork in an unordered bulleted list
if ($result->num_rows > 0) {
	while ($row = mysqli_fetch_assoc($result)){
		echo "<li>". "product id: " . $row["productid"] . 
		" - description: "
		. $row["description"] . " - cost: " . $row["cost"] . 
		" - quantity: "
		. $row["quantity"] . "</li>";
	}
}
else{
	echo "no products purchased";
}
 echo "</ul>"; //end the bulleted list
 mysqli_free_result($result);
?>
