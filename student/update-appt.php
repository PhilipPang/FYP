<?php
	include("read-guideline.php");
	
	$sql = "UPDATE appointment SET
	appointment_data = '$_POST[appt_title]',
	appointment_description = '$_POST[appt_desc]',
	appointment_datetime = '$_POST[appt_datetime]'
	
	WHERE appointment_ID = $_POST[appointment_ID];";
	
	if (mysqli_query($conn,$sql)){
		mysqli_close($conn);
		header("Location: appointment.php");
	}
?>