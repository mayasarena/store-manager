<?php
 $query = 'SELECT product.description FROM product WHERE prodID NOT IN 
	(SELECT prodID FROM purchases)'; 
 
$result = mysqli_query($connection, $query);
 if (!$result) {
 	die("databases query failed. ");
 }
 echo "<ul>"; //put the artwork in an unordered bulleted list
if ($result->num_rows > 0) {
	while ($row = mysqli_fetch_assoc($result)){
		echo "<li>". $row["description"] ."</li>";
	}
}
else{
	echo "all products have been purchased.";
}
 echo "</ul>"; //end the bulleted list
 mysqli_free_result($result);
?>
