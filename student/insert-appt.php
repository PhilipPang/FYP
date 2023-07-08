<?php
	include("read-guideline.php");

	$sql="INSERT INTO appointment (appointment_data, appointment_description, is_approve, appointment_datetime, student_ID, supervisor_ID)
	
	VALUES
	
	('$_POST[appt_title]','$_POST[appt_desc]',0,'$_POST[appt_datetime]','$student_ID','$supervisor_ID')";
	
	if (!mysqli_query($conn,$sql)) {
		die('Error: '.mysqli_error($conn));
	}
	else {
		echo '<script>alert("Appointment made!");
		window.location.href = "appointment.php";
		</script>';
	}
	
	mysqli_close($conn);
?>