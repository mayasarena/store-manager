<?php
$query = "SELECT * FROM agent ORDER BY firstname";
$result = 
mysqli_query($connection,$query);
if (!$result) {
die("databases query failed.");
}

while ($row = mysqli_fetch_assoc($result)) {
	echo "<input type='radio' name='agentid' value=".$row["agentid"].">". 
	"agentid: " . $row["agentid"]. " - agent name: " .
	$row["firstname"]. $row["lastname"]. "<br>";
}
mysqli_free_result($result);

?>
