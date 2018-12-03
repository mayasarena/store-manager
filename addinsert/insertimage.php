<!-- php script for updating image -->
<?php
session_start();//session to keep track of customer id
$image=$_POST['image'];
$updateImage = 'UPDATE customer SET cusimage="'.$image.'" WHERE
cusID="'.$_SESSION['customer'].'"'; //query to update image
if (!mysqli_query($connection, $updateImage)) {//check if query failed
	die("Error: update failed" . mysqli_error($connection));
}	
echo "Image for customer ". $_SESSION['customer']. 
" successfully updated to:<p> <img width='130px' 
src='".$image."'>";
session_unset();//unset and destroy session
session_destroy();
mysqli_close($connection); //closing connection
?>
