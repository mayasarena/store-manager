<!DOCTYPE html>
<html>
<head>
	<title>TITLE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Concert+One" 
	rel="stylesheet">
</head>
<body>
<!-- connecting to database and including javascript -->
<?php include "connectdb.php";?>
<script src="index.js"></script>

<!-- header -->
<div class="header">
	<h1>DATABASE</h1>
  	<div class="header-links">
  		<a href="/"><button class="btn">
		<span class="text">home</span></button></a>
  		<a href="/"><button class="btn yello">
		<span class="text">insert</span></button></a>
  		<a href="/"><button class="btn gree">
		<span class="text">update/delete</span></button></a>
  		<a href="/"><button class="btn blu">
		<span class="text">lists</span></button></a>
  	</div>
</div>

<!-- flex container to enclose the layout of the user interface -->
<div class="flex-container">

<!-- INSERT SECTION -->

	<!-- part 3 insert new purchase -->
	<div class="flex-child">
	<h2 style="font-size: 20px">Add a purchase</h2>
	<p>
	<!-- opening up a form to receive the user selections -->
	<form action="addnewpurchase.php" method="post">
	<!-- getting customer id through radio buttons -->
	<button class="h3">Customer id:</button><br>
	<?php include "customerradio.php"?>
	<!-- getting product id through radio buttons -->
	<button class="h3">Product id:</button></br>
	<?php include "productradio.php"?>
	<!-- getting quantity through text input -->
	<button class="h3">Quantity (positive int):</button></br>
	<input type="text" pattern="\d+" 
	name="quantity"><br>
	<!-- submit button for info, brings you to a new page -->
	<input type="submit" value="Add New Purchase">
	</form>
	</div>

	<!-- part 4 insert a new customer -->
	<div class="flex-child" style="border-left: 3px solid #ffbf00">
	<h2 style="font-size: 20px">Add a customer</h2>
	<p>
	<!-- opening up a form to receive the user selections -->
	<form action="addnewcustomer.php" method="post">
	<!-- getting customer id through text input -->
	<button class="h3">Customer id (2 chars):</button><br>
	<input type="text" pattern="[0-9a-zA-Z]{2}" 
	size="2" maxlength="2" name="customerid"><br>
	<!-- getting first name through text input -->
	<button class="h3">First Name:</button><br>
	<input type="text" pattern="[a-zA-Z]+" size="30" maxlength="30" 
	name="firstname"><br>
	<!-- getting last name through text input -->
	<button class="h3">Last Name:</button><br>
	<input type="text" pattern="[a-zA-Z]+" size="30" maxlength="30"
	name="lastname"><br>
	<!-- getting city through text input -->
	<button class="h3">City:</button></br>
	<input type="text" pattern="[a-zA-Z ]+" size="15" maxlength="15" 
	name="city"><br>
	<!-- getting phone number through text input -->
	<button class="h3">Phone Number (000-0000):</button><br>
	<input type="text" pattern="[0-9]{3}-[0-9]{4}" 
	size="20" maxlength="8" name="phone"><br>
	<!-- getting agent id through radio buttons -->
	<button class="h3">Agent id:</button><br>
	<?php include "agentradio.php"?><br>
	<!-- submit button, takes you to new page -->
	<input type="submit" value="Add New Customer">
	</form>
	</div>
	
	<!-- insert title -->
	<div class="container">
	<div class="flex-title">
	<h2>Insert</h2>
	</div>
	
	<!-- bonus part 10 insert customer image -->
	<div class="flex-child" style="flex: 0 0 200px; 
	text-align: center; width: 200px;">
	<h2 style="font-size: 20px;">Insert<br>customer<br>image</h2>
	<!-- opening up form to get customer id -->
	<form action="getimage.php" method="post">
	<!-- dropdown box -->
	<select name="pickacustomer4" id="pickacustomer4">
		<option value="0">pick a customer</option>
		<?php include "5getcustomer.php"?>
	</select>
	</form>
	</div>
	</div>

	
<!-- UPDATE/DELETE SECTION -->

	<!-- update/delete title-->
	<div class="flex-title" style="align-self: center">
	<h2 style="color: #5cb85c">Update/<br>Delete</h2>
	</div>

	<!-- part 5 update customer's phone number -->
	<div class="flex-child" style="height: 130px; min-height: 0px; 
	width: 600px; text-align: center;">
	<h2 style="font-size: 20px; color: #5cb85c;">
	Update customer phone number</h2><br>
	<!-- opening form to get selected customer -->
	<form action="displayphone.php" method="post">
	<!-- drop down box -->
	<select name="pickacustomer2" id="pickacustomer2">
		<option value="0">Select a Customer</option>
		<?php include "5getcustomer.php"?>
	</select>
	</form>
	</div>
	
	<!-- part 6 delete a customer -->
	<div class="flex-child" style="height: 130px; min-height: 0px; 
	width: 600px; text-align: center;">
	<h2 style="font-size: 20px; color: #5cb85c;">
	Delete a customer</h2><br>
	<!-- opening up form to get selected customer -->
	<form action="deletecustomerpage.php" method="post">
	<!-- dropdown box -->
	<select name="pickacustomer3" id="pickacustomer3">
		<option value="0">Select a Customer</option>
		<?php include "5getcustomer.php"?>
	</select>
	</form>
	</div>

<!-- LISTS SECTION -->

	<!-- part 1 all customer info -->
	<div class="other-container">
	<div class="flex-child">
	<h2 style="font-size: 20px; color: #428bca;">
	Customer Information</h2>
	<!-- getting selected customer, opens new page to display product -->
	<form action="displayproduct.php" method="post">
		<?php include "getcustomer.php";?>
	<p>	
	<input type="submit" value="Get Purchases">
	</select>
	</form>
	</div>	

	<!-- part 7 list quantity of objects -->
	<div class="flex-child" style="text-align: center; flex: 0 0 100px;">
	<h2 style="font-size: 20px; color: #428bca;">
	Customer Product Quantities</h2>
	<!-- getting quantity -->
	<button class="h3">Enter a Quantity (int):</button>
	<form action="displayquantities.php" method="post">
	<input type="text" pattern="[0-9]+" 
	size="11" maxlength="11" name="quantity"><p>
	<!-- opens new page to display customer -->
	<input type="submit" value="Get Customers">
	</form>
	</div>
	</div>

	<!-- part 8 list description of purchased products -->
	<div class="other-container">
	<div class="flex-child" style="flex: 0 0 100px;">
	<center><h2 style="font-size: 20px; color: #428bca;">
	Products that have never been purchased</h2></center>
	<!-- lists products that have never been purchased -->
	<?php include "getnopurchase.php"?>
	</div>
	
	<!-- part 2 product order -->
	<div class="flex-child">
	<center><h2 style="font-size: 20px; color: #428bca;">
	Products in Order by Price</h2></center>
	<?php include "getproduct.php";?>
	<form action="2displaydesc.php" method="post">
	<!-- drop downbox to get selection, opens new page with selected display -->
	<select name="pickorder" id="pickorder">
		<option value="0">Ascending or Descending Order</option>
		<option value="1">Price Ascending</option>
		<option value="2">Price Descending</option>
		<option value="3">Description Ascending</option>
		<option value="4">Description Descending</option>
	</select>
	</form>
	</div>
	</div>
	
	<!-- lists title -->
	<div class="other-container">
	<div class="flex-title">
	<h2 style="color: #428bca">Lists</h2>
	</div>

	<!-- part 9 total number of purchases -->
	<div class="flex-child">
	<center><h2 style="font-size: 20px; color: #428bca;">
	Total Number of Purchases</h2></center>
	<button class="h3">Product Id:</button>
	<!-- form to get selection and display to new page -->
	<form action="displaypurchases.php" method="post">
	<?php include "productradio.php"?><br>
	<input type="submit" value="Get Purchase Info">
	</form>
	</div>
	</div>

</body>
</html>
