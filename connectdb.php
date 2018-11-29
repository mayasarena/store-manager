<?php
$dbhost = "localhost";
$dbuser= "root";
$dbpass = "3319";
$dbname = "mmurad7assign2db";
$connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()) {
     die("database connection failed :" .
     mysqli_connect_error() .
     "(" . mysqli_connect_errno() . ")"
         );
    }
?>
