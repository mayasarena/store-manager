<!-- php script for getting order of products based on description or cost -->
<?php
$whichorder = $_POST["pickorder"]; //get selected value from the form

//query for price ascending
$query1 = 'SELECT * FROM product ORDER BY cost ASC'; 
$result1 = mysqli_query($connection, $query1);
if (!$result1) {//checking if query failed
 	die("databases query failed. ");
}
echo "<ul>"; // iterating to display products in order
if ($whichorder == "1"){
	while ($row = mysqli_fetch_assoc($result1)){
		echo "<li>". "PRODUCT ID: " . $row["prodID"] . " - DESCRIPTION: "
		. $row["description"] . " - COST " . $row["cost"] . " - QUANTITY: "
		. $row["quantityonhand"] . "</li>";
	}	
}
echo "</ul>"; 
mysqli_free_result($result1);

//query for price descending
$query2 = 'SELECT * FROM product ORDER BY cost DESC'; 
$result2 = mysqli_query($connection, $query2);
if (!$result2) {
 	die("databases query on products failed. ");
}
echo "<ul>"; 
if ($whichorder == "2"){
	while ($row = mysqli_fetch_assoc($result2)){//iterating to display products
		echo "<li>". "PRODUCT ID: " . $row["prodID"] . " - DESCRIPTION: "
		. $row["description"] . " - COST: " . $row["cost"] 
		. " - QUANTITY: "
		. $row["quantityonhand"] . "</li>";
	}	
}
echo "</ul>"; 
mysqli_free_result($result2);

//query for ascending description
$query3 = 'SELECT * FROM product ORDER BY description ASC'; 
$result3 = mysqli_query($connection, $query3);
if (!$result3) {
 	die("databases query on products failed. ");
}
echo "<ul>";
if ($whichorder == "3"){
	while ($row = mysqli_fetch_assoc($result3)){//iterating to display products
		echo "<li>". "PRODUCT ID: " . $row["prodID"] . " - DESCRIPTION: "
		. $row["description"] . " - COST: " 
		. $row["cost"] . " - QUANTITY: "
		. $row["quantityonhand"] . "</li>";
	}	
}
echo "</ul>"; //end the bulleted list
mysqli_free_result($result3);

//query for descending description
$query4 = 'SELECT * FROM product ORDER BY description DESC'; 
$result4 = mysqli_query($connection, $query4);
if (!$result4) {
 	die("databases query on products failed. ");
}
echo "<ul>"; 
if ($whichorder == "4"){
	while ($row = mysqli_fetch_assoc($result4)){//iterating to display products
		echo "<li>". "PRODUCT ID: " . $row["prodID"] . " - DESCRIPTION: "
		. $row["description"] . " - COST: " . $row["cost"] 
		. " - QUANTITY: "
		. $row["quantityonhand"] . "</li>";
	}	
}
echo "</ul>"; 
mysqli_free_result($result4);
mysqli_close($connection); //closing connection
?>
