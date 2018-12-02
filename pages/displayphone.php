<!DOCTYPE html>
<html>
<head>
	<title>Assignment3 - display phone</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<!-- connecting to database and starting session to keep track of customer id -->
<?php 
	include "connectdb.php";
	session_start(); 
	if (!isset($_SESSION['customer'])){// if session is set, do not reset it
  		$_SESSION['customer']=$_POST["pickacustomer2"];
	}
?>
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

<center><h2 style="color: #5cb85c">Update customer phone number:</h2></center>
<div style="background-color: #5cb85c; opacity: 0.7; text-align: center; 
padding: 40px; width: 200px; margin: 0 auto;">
<?php 
	if (!isset($_POST['phone'])){
		include "../getstuff/getcustomerphone.php";
	} //if phone variable is not set, include the get phone php script
?>
<!-- opening form to get new phone number -->
<form action="" method="post">
<button class="h3" disabled>New phone number (000-0000):</button><br>
<!-- input text box -->
<input type="text" pattern="[0-9]{3}-[0-9]{4}"
size="20" maxlength="8" name="phone"><p>
<input type="submit" value="Update Phone Number">
<?php
	if (isset($_POST['phone'])){ //if phone variable is set, run this script
		include "../updatedelete/updatephonenum.php";
	}
?>
</form>
</div>
</body>
</html>
