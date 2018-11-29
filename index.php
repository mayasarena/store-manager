<!DOCTYPE html>
<html>
<head>
	<title>Assignment3</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>


<?php include "connectdb.php";?>
<script src="index.js"></script>

<h1>Update Database</h1>
<!-- part 1 all customer info -->
Customer info:
<form action="displayproduct.php" method="post">
<select name="pickacustomer" id="pickacustomer">
  	<option value="1">Customer Information</option>
	<?php include "getcustomer.php";?>	
</select>
</form>
<hr>
<?php
 	if (isset($_POST['pickacustomer'])) {
 		include "connectdb.php";
 		include "displayproduct.php";
 	}
?>
<hr>

<!-- part 2 drop down for product order -->
Products:
<?php include "getproduct.php";?>
<form action="2displaydesc.php" method="post">
<select name="pickorder" id="pickorder">
	<option value="0">pick order</option>
	<option value="1">price asc</option>
	<option value="2">price desc</option>
	<option value="3">description asc</option>
	<option value="4">description desc</option>
</select>
</form>
<hr> 
<?php
         if (isset($_POST['pickorder'])) {
                 include "connectdb.php";
                 include "displayproduct.php";
         }
?>
<hr>

<!-- part 3 insert new purchase -->
ADD A PURCHASE:
<p>
<form action="addnewpurchase.php" method="post">
Customer id:<?php include "customerradio.php"?>
Product id:<?php include "productradio.php"?>
Quantity(positive integer):<input type="text" pattern="\d+" name="quantity"><br>
<input type="submit" value="Add New Purchase">
</form>
<hr>

<!-- part 4 insert a new customer -->
ADD A PURCHASE:
<p>
<form action="addnewcustomer.php" method="post">
Customer id:<input type="text" pattern="\+d" name="customerid"><br>
Product id:<?php include "productradio.php"?>
Quantity(positive integer):<input type="text" pattern="\d+" name="quantity"><br>
<input type="submit" value="Add New Purchase">
</form>
<img src="http://www.csd.uwo.ca/~lreid/blendedcs3319/flippedclassroom/four/kids.png" width="216" height="260">
</body>
</html>
