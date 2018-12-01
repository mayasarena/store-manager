<?php
 $whichCustomer = $_POST["customerinfo"]; //get selected museum value from the form
echo $whichCustomer;

 $query = 'SELECT product.prodID, description, cost, purchases.Quantity 
	FROM 
	product INNER JOIN purchases ON purchases.prodID = 
	product.prodID WHERE purchases.cusID = "'.$whichCustomer.'"'; 
 $result = mysqli_query($connection, $query);
 if (!$result) {
 die("databases query on products failed. ");
 }
 echo "<ul>"; //put the artwork in an unordered bulleted list
if ($result->num_rows > 0) {
	while ($row = mysqli_fetch_assoc($result)){
		echo "<li>". "product id: " . $row["prodID"] . 
		" - description: "
		. $row["description"] . " - cost: " . $row["cost"] . 
		" - quantity: "
		. $row["Quantity"] . "</li>";
	}
}
else{
	echo "no products purchased";
}
 echo "</ul>"; //end the bulleted list
 mysqli_free_result($result);
?>
