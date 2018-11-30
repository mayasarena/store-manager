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
ADD A CUSTOMER:
<p>
<form action="addnewcustomer.php" method="post">
Customer id(2 characters):<input type="text" pattern="[0-9a-zA-Z]{2}" 
size="2" maxlength="2" name="customerid"><br>
First Name:<input type="text" pattern="[a-zA-Z]+" size="30" maxlength="30" 
name="firstname"><br>
Last Name:<input type="text" pattern="[a-zA-Z]+" size="30" maxlength="30"
name="lastname"><br>
City:<input type="text" pattern="[a-zA-Z ]+" size="15" maxlength="15" 
name="city"><br>
Phone Number(000-0000):<input type="text" pattern="[0-9]{3}-[0-9]{4}" 
size="20" maxlength="8" name="phone"><br>
Agent id(2 characters):<?php include "agentradio.php"?>
<input type="submit" value="Add New Customer">
</form>
<hr>


<!-- part 5 update customer's phone number -->
UPDATE CUSTOMER PHONE NUMBER:
<form action="displayphone.php" method="post">
<select name="pickacustomer2" id="pickacustomer2">
	<option value="0">pick a customer</option>
	<?php include "5getcustomer.php"?>
</select>
</form>
<hr>

<!-- part 6 delete a customer -->
DELETE A CUSTOMER:
<form action="deletecustomerpage.php" method="post">
<select name="pickacustomer3" id="pickacustomer3">
	<option value="0">pick a customer to delete</option>
	<?php include "5getcustomer.php"?>
</select>
</form>

<!-- part 7 list quantity of objects -->
<form action="displayquantities.php" method="post">
Quantity: <input type="text" pattern="[0-9]" 
size="11" maxlength="11" name="quantity"><br>
<input type="submit" value="Get Customers">
</form>

<img src="http://www.csd.uwo.ca/~lreid/blendedcs3319/flippedclassroom/four/kids.png" width="216" height="260">
</body>
</html>
