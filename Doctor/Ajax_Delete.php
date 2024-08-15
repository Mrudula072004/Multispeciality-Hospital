<?php

include("dbconnect.php");

$sql=$_POST["query"];

if(mysqli_query($conn,$sql))
{
	echo "Record Inserted Successfully";
}
else
{
	echo mysqli_error($conn);
}

?>