<?php

$conn=mysqli_connect("localhost" , "root" , "" , "doctor_patient");
if($conn==true)
{
	//echo "Connected";
}
else
{
	echo "Not Connected";
}
 
?>
