<!-- php scirpt for getting objects that have never been purchased -->
<?php
$query = 'SELECT product.description FROM product WHERE prodID NOT IN 
	(SELECT prodID FROM purchases)'; //query to get info
 
$result = mysqli_query($connection, $query);

if (!$result) {//checking if query failed
 	die("databases query failed. ");
}
echo "<ul>";
if ($result->num_rows > 0) {//checking if there is any data
	while ($row = mysqli_fetch_assoc($result)){
		echo "<li>". $row["description"] ."</li>";
	}
}
else{//otherwise no products have not been purchased
	echo "All products have been purchased.";
}
echo "</ul>"; 
mysqli_free_result($result);
mysqli_close($connection); //closing connection
?>
