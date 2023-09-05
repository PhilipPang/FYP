<?php
	include("read-submit.php");
	
	$sql = "UPDATE project SET
	project_grade = '$_POST[project_grade]',
	project_submit_comment = '$_POST[project_desc]'
	
	WHERE project_ID = $_POST[project_ID];";
	
	if (mysqli_query($conn,$sql)){
		mysqli_close($conn);
		header("Location: submission.php");
	}

?>