<?php
	ob_start();
	include "getcustomerphone.php";
	ob_end_clean();
	echo $whichCustomer;
	$phonenum=$_POST["phone"];
	$updatePhone = 'UPDATE customer SET phonenumber="'.$phonenum.'" WHERE
	cusID="'.$whichCustomer.'"'; 
   	if (!mysqli_query($connection, $updatePhone)) {
       		die("Error: update failed" . mysqli_error($connection));
    	}	
	echo "Phone number succesfully updated to: " . $phonenum;
?>
