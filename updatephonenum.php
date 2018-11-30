<!DOCTYPE html>
<?php
	session_start();
	$phonenum=$_POST['phone'];
	$updatePhone = 'UPDATE customer SET phonenumber="'.$phonenum.'" WHERE
	cusID="'.$_SESSION['customer'].'"'; 
   	if (!mysqli_query($connection, $updatePhone)) {
       		die("Error: update failed" . mysqli_error($connection));
    	}	
	echo "Phone number succesfully updated to: " . $phonenum;
	session_unset();
	session_destroy();
?>
