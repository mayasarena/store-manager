<!DOCTYPE html>
<html>
<head>
	<title>TITLE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- connecting to database  -->
<?php include "connectdb.php";?>

<a name="home"></a>
<!-- header -->
<div class="header">
	<h1>DATABASE</h1>
  	<div class="header-links">
  		<a href="#home"><button class="btn">
		<span class="text">home</span></button></a>
  		<a href="#insert"><button class="btn yello">
		<span class="text">insert</span></button></a>
  		<a href="#updel"><button class="btn gree">
		<span class="text">update/delete</span></button></a>
  		<a href="#lists"><button class="btn blu">
		<span class="text">lists</span></button></a>
  	</div>
</div>

<!-- flex container to enclose the layout of the user interface -->
<div class="flex-container">
<!-- INSERT SECTION -->

	<!-- part 3 insert new purchase -->
	<div class="flex-child" style="background-color: #ffbf00;">
	<h3>Add a purchase</h3>
	<p>
      	<div style="overflow-y: scroll; height:420px;"><!-- scroll box -->
	<!-- opening up a form to receive the user selections -->
	<form action="pages/addnewpurchase.php" method="post">
	<!-- getting customer id through radio buttons -->
	<button class="h3" disabled>Customer id:</button><br>
	<?php include "radiobuttons/customerradio.php"?>
	<!-- getting product id through radio buttons -->
	<button class="h3" disabled>Product id:</button></br>
	<?php include "radiobuttons/productradio.php"?>
	<!-- getting quantity through text input -->
	<button class="h3" disabled>Quantity (positive int):</button></br>
	<input type="text" pattern="\d+" 
	name="quantity" required>
	</div><p>
	<!-- submit button for info, brings you to a new page -->
	<input type="submit" value="Add New Purchase">
	</form>
	</div>

	<!-- part 4 insert a new customer -->
	<div class="flex-child" style="background-color: #ffbf00;">
	<h3>Add a customer</h3>
	<p>
      	<div style="overflow-y: scroll; height:400px;"><!-- scroll box -->
	<!-- opening up a form to receive the user selections -->
	<form action="pages/addnewcustomer.php" method="post">
	<!-- getting customer id through text input -->
	<button class="h3" disabled>Customer id (2 chars):</button><br>
	<input type="text" pattern="[0-9a-zA-Z]{2}" 
	size="2" maxlength="2" name="customerid" required><br>
	<!-- getting first name through text input -->
	<button class="h3" disabled>First Name:</button><br>
	<input type="text" pattern="[a-zA-Z]+" size="10" maxlength="10" 
	name="firstname" required><br>
	<!-- getting last name through text input -->
	<button class="h3" disabled>Last Name:</button><br>
	<input type="text" pattern="[a-zA-Z]+" size="10" maxlength="10"
	name="lastname" required><br>
	<!-- getting city through text input -->
	<button class="h3" disabled>City:</button></br>
	<input type="text" pattern="[a-zA-Z ]+" size="15" maxlength="15" 
	name="city" required><br>
	<!-- getting phone number through text input -->
	<button class="h3" disabled>Phone Number (000-0000):</button><br>
	<input type="text" pattern="[0-9]{3}-[0-9]{4}" 
	size="20" maxlength="8" name="phone" required><br>
	<!-- getting agent id through radio buttons -->
	<button class="h3" disabled>Agent id:</button><br>
	<?php include "radiobuttons/agentradio.php"?>
	</div><p>
	<!-- submit button, takes you to new page -->
	<input type="submit" value="Add New Customer">
	</form>
	</div>
	
	<!-- insert title -->
	<div class="container">
	<div class="flex-title">
	<a name="insert"></a>
	<h2>Insert</h2>
	</div>
	
	<!-- bonus part 10 insert customer image -->
	<div class="flex-child" style="flex: 0 0 200px; 
	text-align: center; width: 200px; background-color: #ffbf00;">
	<h3>Insert<br>customer<br>image</h3>
	<!-- opening up form to get customer id -->
	<form action="addinsert/getimage.php" method="post">
	<!-- dropdown box -->
	<select name="pickacustomer4" id="pickacustomer4">
		<option value="0">Pick A Customer</option>
		<?php include "dropdown/customerdropdown.php"?>
	</select>
	</form>
	</div>
	</div>

	
<!-- UPDATE/DELETE SECTION -->

	<!-- update/delete title-->
	<div class="flex-title" style="align-self: center">
	<a name="updel"></a>
	<h2 style="color: #5cb85c">Update/<br>Delete</h2>
	</div>

	<!-- part 5 update customer's phone number -->
	<div class="flex-child" style="height: 130px; min-height: 0px; 
	width: 600px; text-align: center; background-color: #5cb85c;">
	<h3>Update customer phone number</h3><br>
	<!-- opening form to get selected customer -->
	<form action="pages/displayphone.php" method="post">
	<!-- drop down box -->
	<select name="pickacustomer2" id="pickacustomer2">
		<option value="0">Select a Customer</option>
		<?php include "dropdown/customerdropdown.php"?>
	</select>
	</form>
	</div>
	
	<!-- part 6 delete a customer -->
	<div class="flex-child" style="height: 130px; min-height: 0px; 
	width: 600px; text-align: center; background-color: #5cb85c;">
	<h3>Delete a customer</h3><br>
	<!-- opening up form to get selected customer -->
	<form action="pages/deletecustomerpage.php" method="post">
	<!-- dropdown box -->
	<select name="pickacustomer3" id="pickacustomer3">
		<option value="0">Select a Customer</option>
		<?php include "dropdown/customerdropdown.php"?>
	</select>
	</form>
	</div>

<!-- LISTS SECTION -->

	<!-- part 1 all customer info -->
	<div class="other-container">
	<div class="flex-child" style="background-color: #428bca;">
	<h3>Customer Information</h3>
	<div style="overflow-y: scroll; height:250px;"><!-- scroll box -->
	<!-- getting selected customer, opens new page to display product -->
	<form action="pages/displayproduct.php" method="post">
		<?php include "radiobuttons/customerinforadio.php";?>
	</div>
	<p>	
	<input type="submit" value="Get Purchases">
	</select>
	</form>
	</div>	

	<!-- part 7 list quantity of objects -->
	<div class="flex-child" style="text-align: center; flex: 0 0 100px; 
	background-color: #428bca;">
	<h3>Customer Product Quantities</h3>
	<!-- getting quantity -->
	<button class="h3" disabled>Enter a Quantity (int):</button>
	<form action="pages/displayquantities.php" method="post">
	<input type="text" pattern="[0-9]+" 
	size="11" maxlength="11" name="quantity"><p>
	<!-- opens new page to display customer -->
	<input type="submit" value="Get Customers">
	</form>
	</div>
	</div>

	<!-- part 8 list description of purchased products -->
	<div class="other-container">
	<div class="flex-child" style="flex: 0 0 100px; background-color: #428bca;">
	<center><h3>Products that have never been purchased</h3></center>
	<!-- lists products that have never been purchased -->
	<?php include "getstuff/getnopurchase.php"?>
	</div>
	
	<!-- part 2 product order -->
	<div class="flex-child" style="background-color: #428bca;">
	<center><h3>Products in Order by Price</h3></center>
        <div style="overflow-y: scroll; height:275px;"><!-- scroll box -->
	<?php include "getstuff/getproduct.php";?>
	</div><p>
	<form action="pages/orderedprodpage.php" method="post">
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
	<a name="lists"></a>
	<h2 style="color: #428bca">Lists</h2>
	</div>

	<!-- part 9 total number of purchases -->
	<div class="flex-child" style="background-color: #428bca;">
	<center><h3>Total Number of Purchases</h3></center>
	<button class="h3" disabled>Product Id:</button>
        <div style="overflow-y: scroll; height:275px;"><!-- scroll box -->
	<!-- form to get selection and display to new page -->
	<form action="pages/displaypurchases.php" method="post">
	<?php include "radiobuttons/productradio.php"?><br>
	</div>
	<input type="submit" value="Get Purchase Info">
	</form>
	</div>
	</div>
</div>

<!-- javascript -->
<script src="index.js"></script>
</body>
</html>
