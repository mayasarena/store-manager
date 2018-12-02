<!DOCTYPE html>
<html>
<head>
	<title>Ordered Products</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<!-- header -->
<div class="header">
        <h1>DATABASE</h1>
        <div class="header-links">
                <a href="../#home"><button class="btn">
                <span class="text">home</span></button></a>
                <a href="../#insert"><button class="btn yello">
                <span class="text">insert</span></button></a>
                <a href="../updel"><button class="btn gree">
                <span class="text">update/delete</span></button></a>
                <a href="../lists"><button class="btn blu">
                <span class="text">lists</span></button></a> 
	</div>
</div>

<center><h2 style="color: #428bca">Ordered Products:</h2></center>
<div style="background-color: #428bca; opacity: 0.7; text-align: center; 
padding: 40px; padding-left: 10px; width: 600px; margin: 0 auto;">
<!-- include connect to db and php script for ordered products -->
<?php include "connectdb.php";
 include "../getstuff/getorder.php";?>
</div>
</body>
</html>
