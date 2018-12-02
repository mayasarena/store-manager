<!-- creating agent radio buttons -->
<?php
$query = "SELECT * FROM agent ORDER BY firstname"; //query to get all agents
$result = 
mysqli_query($connection,$query); //getting result
if (!$result) {//checking if query failed
	die("databases query failed.");
}

while ($row = mysqli_fetch_assoc($result)) { //iterating to get all agents
	echo "<input type='radio' name='agentid' value=".$row["agentID"]." required>". 
	"AGENT ID: " . $row["agentID"]. " - AGENT NAME: " .
	$row["firstname"]. " " .$row["lastname"]. "<br>";
}

mysqli_free_result($result);

?>
