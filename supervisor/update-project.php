<?php
	include("read-project.php");

    $sql = "INSERT INTO guideline SET
    guide_title = '$_POST[grade_select]',
    guide_overview = '$_POST[grade_select]',
    guide_instruction = '$_POST[grade_select]',
    guide_file = '$_POST[grade_select]'";
	
	$sql2 = "INSERT INTO project SET
	project_name = '$_POST[grade_select]',
    project_start_date = '$_POST[grade_select]',
    project_end_date = '$_POST[grade_select]',
    project_present_date = '$_POST[grade_select]',
    project_description = '$_POST[grade_select]'";

    
	
	if (mysqli_query($conn,$sql)){
		mysqli_close($conn);
		header("Location: submission.php");
	}

?>