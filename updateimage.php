<?php
	session_start();
	$image=$_POST['image'];
	$updateImage = 'UPDATE customer SET cusimage="'.$image.'" WHERE
	cusID="'.$_SESSION['customer'].'"'; 
	if (!mysqli_query($connection, $updateImage)) {
       		die("Error: update failed" . mysqli_error($connection));
    	}	
	echo "Image successfully updated";
	session_unset();
	session_destroy();
?>
