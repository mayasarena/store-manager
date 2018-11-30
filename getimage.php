<?php
session_start();
$_SESSION['customer']=$_POST["pickacustomer4"];

include "connectdb.php";
 $customerId = $_POST["pickacustomer4"]; //get selected museum value from the form
 $query = 'SELECT cusID, firstname, lastname, cusimage FROM customer WHERE
	cusimage IS NOT NULL AND cusID="'.$customerId.'"';
 $result = mysqli_query($connection, $query);
 if (!$result) {
 	die("databases query on products failed. ");
 }
if ($result->num_rows == 0) {
	header('Location: displayimage.php'); 
}

else{
	while ($row = mysqli_fetch_assoc($result)){
		$url = $row["cusimage"];
		header('Location: ' . $url); 
	}
}
mysqli_free_result($result);
?>
