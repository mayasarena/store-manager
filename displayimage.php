<!DOCTYPE html>
<html>
<head>
	<title>Assignment3 - display quantities</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<?php
	include "connectdb.php";
?>
add an image to the customer table:
<form action="" method="post">
<br> image url: <input type="text" maxlength="100" name="image"></br>
<input type="submit" value="Update Image">
</form>
<?php
	if (isset($_POST['image'])){
		include "updateimage.php";
	}
?>
<hr>
<img src="http://www.csd.uwo.ca/~lreid/blendedcs3319/flippedclassroom/four/kids.png" width="216" height="260">
</body>
</html>
