<?php
	include("../src/action/conn.php");
	include("../session.php");
	
	$sql = "UPDATE supervisor SET
	supervisor_password = '$_POST[password2]'
	
	WHERE supervisor_ID = $_SESSION[id];";
	
	if (mysqli_query($conn,$sql)){
		mysqli_close($conn);
		header("Location: profile.php");
	}
?>