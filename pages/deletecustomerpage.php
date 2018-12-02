<!DOCTYPE html>
<html>
<head>
	<title>Delete Customer</title>
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

<center><h2 stylee"color: #5cb85c">Delete a customer:</h2></center>
<div style="background-color: #5cb85c; opacity: 0.7; text-align: center; 
padding: 40px; width: 200px; margin: 0 auto;">
<!-- connecting to db and including delete script -->
<?php include "connectdb.php";
include "../updatedelete/deletecustomer.php";?>
</div>
</body>
</html>
