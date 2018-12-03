<!-- php script for updating phone number -->
<?php
	session_start(); // start session to have access to customer id variable
	$phonenum=$_POST['phone'];
	$updatePhone = 'UPDATE customer SET phonenumber="'.$phonenum.'" WHERE
	cusID="'.$_SESSION['customer'].'"'; 
   	if (!mysqli_query($connection, $updatePhone)) {//check if query works
       		die("Error: update failed" . mysqli_error($connection));
    	}	
	echo "<p>Phone number successfully updated to: " . $phonenum;
	session_unset();//destroy session
	session_destroy();
	mysqli_close($connection); //closing connection
?>
