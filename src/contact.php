<?php
	include("action/conn.php");
	
	$currentDateTime = date('Y-m-d');
	
	$sql="INSERT INTO contactus (name, email, message, created_at, is_read)
	
	VALUES
	
	('$_POST[name]','$_POST[email]','$_POST[message]','$currentDateTime','0')";
	
	if (!mysqli_query($conn,$sql)) {
		die('Error: '.mysqli_error($conn));
	}
	else {
		echo '<script>alert("Enquiry recorded!");
		window.location.href = "../index.php";
		</script>';
	}
	
	mysqli_close($conn);
?>