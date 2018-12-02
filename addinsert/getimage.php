<!-- php script to check if customer has an image -->
<?php
session_start();//starting a session to keep customer variable
$_SESSION['customer']=$_POST["pickacustomer4"];

include "connectdb.php";
$customerId = $_POST["pickacustomer4"]; 
$query = 'SELECT cusID, firstname, lastname, cusimage FROM customer WHERE
	cusimage IS NOT NULL AND cusID="'.$customerId.'"'; //query for image
$result = mysqli_query($connection, $query);
if (!$result) {//check if query failed
	die("databases query on products failed. ");
}
if ($result->num_rows == 0) {//if customer has no image, open new page to add image
	header('Location: ../pages/addnewimage.php'); 
}
//otherwise, display image at url
else{
	while ($row = mysqli_fetch_assoc($result)){
		$url = $row["cusimage"];
		header('Location: ' . $url); 
	}
}
mysqli_free_result($result);
mysqli_close($connection); //closing connection
?>
