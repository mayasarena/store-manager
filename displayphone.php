<!DOCTYPE html>
<html>
<head>
	<title>Assignment3 - display phone</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>

<?php 
	include "connectdb.php";
	session_start(); 
	if (!isset($_SESSION['customer'])){
  		$_SESSION['customer']=$_POST["pickacustomer2"];
	}
?>

<h1>Update Phone Number</h1>
<?php 
	if (!isset($_POST['phone'])){
		include "getcustomerphone.php";
	}
?>
<form action="" method="post">
New phone number(000-0000): <input type="text" pattern="[0-9]{3}-[0-9]{4}"
size="20" maxlength="8" name="phone"><br>
<input type="submit" value="Update Phone Number">
<?php
	if (isset($_POST['phone'])){
		include "updatephonenum.php";
	}
?>
</form>
<hr>
</body>
</html>
