<!DOCTYPE html>
<html>
<head>
	<title>Assignment3 - change customer</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>

<?php include "connectdb.php";
?>
<h1>You added this customer:</h1>
<ol>
<?php
	$customerid=$_POST["customerid"];
	$firstname=$_POST["firstname"];
	$lastname=$_POST["lastname"];
	$city=$_POST["city"];
	$phone=$_POST["phone"];
	$agentid=$_POST["agentid"];	
	$customerExists= 'SELECT * FROM customer WHERE 
	customerid="'.$customerid.'"';
   	$customerResult=mysqli_query($connection,$customerExists);
	if (!$customerResult) {
		die("database customer query failed.");
   	}
	//checking if customer id exists
	if ($customerResult->num_rows>0){
		echo "Customer ID already exists. Please select another one.";
	}
	//adding customer
	else {
		$insertCustomer = 'INSERT INTO customer VALUES("'.$customerid.'",
		"'.$firstname.'","'.$lastname.'","'.$city.'",
		"'.$phone.'","'.$agentid.'")';	
   		if (!mysqli_query($connection, $insertCustomer)) {
        		die("Error: insert failed" . mysqli_error($connection));
    		}	
		echo "New customer has been inserted with values customerid:" .
		$customerid . " firstname:" . $firstname ." last name:" .$lastname.
		" city:" .$city. " phone:" .$phone. " and agentid:" .$agentid;
   	}
	mysqli_close($connection);
?>
</ol>
//drop down box for customer info
<hr>
<hr>
<img src="http://www.csd.uwo.ca/~lreid/blendedcs3319/flippedclassroom/four/kids.png" width="216" height="260">
</body>
</html>
