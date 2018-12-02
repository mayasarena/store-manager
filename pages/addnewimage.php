<!DOCTYPE html>
<html>
<head>
	<title>Assignment 3</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<?php include "connectdb.php";?> <!-- connecting to database -->
 
<!-- header -->
<div class="header">
        <h1>DATABASE</h1>
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

<center><h2>Add a customer image:</h2></center>
<div style="background-color: #ffbf00; opacity: 0.7; text-align: center; 
padding: 40px; width: 200px; margin: 0 auto;">
<!-- form to get image url -->
<form action="" method="post">
<button class="h3" disabled>Image url:</button>
<!-- getting image url -->
<input type="text" maxlength="100" name="image"><p>
<input type="submit" value="Update Image">
</form>
<!-- if url is set, run update image script -->
<?php
	if (isset($_POST['image'])){
		include "../addinsert/insertimage.php";
	}
?>
</div>
</body>
</html>
