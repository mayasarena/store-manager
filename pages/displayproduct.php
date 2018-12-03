<!DOCTYPE html>
<html>
<head>
	<title>Display Products</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<!-- header -->
<div class="header">
        <h1>DATABASES</h1>
        <div class="header-links">
                <a href="../#home"><button class="btn">
                <span class="text">home</span></button></a>
                <a href="../#insert"><button class="btn yello">
                <span class="text">insert</span></button></a>
                <a href="../#updel"><button class="btn gree">
                <span class="text">update/delete</span></button></a>
                <a href="../#lists"><button class="btn blu">
                <span class="text">lists</span></button></a>
	</div>
</div>

<div class="flex-container">
<center><h2 style="color: #428bca">Customers purchased products:</h2></center></div>
<div style="background-color: #428bca; opacity: 0.7; text-align: center; 
padding: 40px; padding-left: 10px; width: 400px; margin: 0 auto;">
<!-- php script to get customer purchased products and connecting to db -->
<?php 
include "connectdb.php";
include "../getstuff/getcustomerprod.php";?>
</div>
</body>
</html>
