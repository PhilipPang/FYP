<?php
	$target_dir = "../project_file/";
	$target_file = $target_dir . basename($_FILES["project_upload"]["name"]);
	$currentDateTime = date('Y-m-d H:i:s');
	if (move_uploaded_file($_FILES["project_upload"]["tmp_name"],$target_file)){
		$file_name = basename($_FILES["project_upload"]["name"]);
	
		include("read-guideline.php");
		$sql = "UPDATE project SET
		project_files = '$target_file',
		project_submit_date = '$currentDateTime'
		
		WHERE project_ID = $project_ID;";
		
		if (!mysqli_query($conn,$sql)) {
			die('Error: '.mysqli_error($conn));
		}
		else {
			echo '<script>alert("Project submitted!");
			window.location.href = "project.php";
			</script>';
		}
		
		mysqli_close($conn);
	} else{
		echo "Sorry, there was an error uploading your file.";
	}
?>