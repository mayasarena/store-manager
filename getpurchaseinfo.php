<?php
 $productid= $_POST["product"]; //get selected museum value from the form

 $query = 'SELECT SUM(purchases.Quantity) AS totalpurchased, 
	product.description, (product.cost*SUM(purchases.Quantity)) AS 
	totalmoney FROM product INNER JOIN purchases ON 
	purchases.prodID=product.prodID WHERE product.prodID = "'.$productid.'"
	GROUP BY purchases.prodID'; 
 
$result = mysqli_query($connection, $query);
 if (!$result) {
 die("databases query on failed. ");
 }
 echo "<ul>"; //put the artwork in an unordered bulleted list
if ($result->num_rows > 0) {
	while ($row = mysqli_fetch_assoc($result)){
		echo "<li>". "Total number of purchases: " . $row["totalpurchases"] . 
		" - description: " . $row["description"] . 
		" - Total money made: " . $row["totalmoney"] . "</li>";
	}
}
else{
	echo "no products purchased";
}
 echo "</ul>"; //end the bulleted list
 mysqli_free_result($result);
?>
