<?php
	$conn = mysqli_connect("localhost","sdp","sdp","sdp");
	
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
	}
	//else {
	//	echo "DB successfully connected!";
	//}
?>