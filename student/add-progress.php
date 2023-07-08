<?php
	include("read-guideline.php");

	$sql="INSERT INTO progress (progress_title, progress_description, progress_date, progress_comment, project_ID)
	
	VALUES
	
	('$_POST[progress_title]','$_POST[progress_desc]','$_POST[progress_date]',null,'$project_ID')";
	
	if (!mysqli_query($conn,$sql)) {
		die('Error: '.mysqli_error($conn));
	}
	else {
		echo '<script>alert("Progress added!");
		window.location.href = "progress.php";
		</script>';
	}
	
	mysqli_close($conn);
?>