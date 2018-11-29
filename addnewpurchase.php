<!DOCTYPE html>
<html>
<head>
	<title>Assignment3 - display product</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>

<?php include "connectdb.php";
?>
<h1>You added this purchase:</h1>
<ol>
<?php
	$whichCustomer= $_POST["customer"];
	$whichProduct= $_POST["product"];
	$quantity=$_POST["quantity"];
	$query1= 'SELECT * FROM purchased WHERE 
	customerid="'.$whichCustomer.'" AND productid="'.$whichProduct.'"';
   	$result=mysqli_query($connection,$query1);
	if (!$result) {
		die("database select query failed.");
   	}
	//checking if customer already bought a product
	if ($result->num_rows>0){
		$row=mysqli_fetch_assoc($result);
   		$newQuantity = intval($row["quantity"]) + $quantity;
   		$newQuantity2= (int)$newQuantity;
   		$query2 = 'UPDATE purchased SET quantity="'.$newQuantity2.'" WHERE
		customerid="'.$whichCustomer.'" AND productid=
		"'.$whichProduct.'"';
   		if (!mysqli_query($connection, $query2)) {
        		die("Error: insert failed" . mysqli_error($connection));
    		}	
		echo "Purchase quantity has been updated with values customerid:" .
		$whichCustomer . " productid:" . $whichProduct ." and 
		quantity: " .$newQuantity2;
	}
	else {
		$query3 = 'INSERT INTO purchased VALUES("'.$whichCustomer.'",
		"'.$whichProduct.'","'.$quantity.'")';	
   		if (!mysqli_query($connection, $query3)) {
        		die("Error: insert failed" . mysqli_error($connection));
    		}	
		echo "New purchase has been inserted with values customerid:" .
		$whichCustomer . " productid:" . $whichProduct ." and 
		quantity: " .$quantity;
   	}
	mysqli_close($connection);
?>
</ol>
<hr>
<hr>
<img src="http://www.csd.uwo.ca/~lreid/blendedcs3319/flippedclassroom/four/kids.png" width="216" height="260">
</body>
</html>
