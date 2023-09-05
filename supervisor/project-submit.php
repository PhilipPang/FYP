<?php
    include("../src/action/conn.php");
    include("../session.php");
	$supervisor_ID = $_SESSION["id"];
	$sql7 = "SELECT * FROM supervisor WHERE supervisor_ID=$supervisor_ID";
	$result7 = mysqli_query($conn,$sql7);
    $row7 = mysqli_fetch_array($result7);

    $program_ID = $row7['program_ID'];

	$target_dir = "../guide_file/";
	$target_file = $target_dir . basename($_FILES["guideline_file"]["name"]);
	$currentDateTime = date('Y-m-d H:i:s');
	if (move_uploaded_file($_FILES["guideline_file"]["tmp_name"],$target_file)){
		$file_name = basename($_FILES["guideline_file"]["name"]);
	
		
			$sql="INSERT INTO guideline (guide_title, guide_overview, guide_instruction, guide_file)
		
			VALUES

			('$_POST[guildeline_title]', '$_POST[guideline_overview]', '$_POST[guideline_desc]', '$target_file')";
		if (!mysqli_query($conn,$sql)) {
			die('Error: '.mysqli_error($conn));
		}
		else {
			$guideline_sql = "SELECT * FROM guideline";
			$guideline_result = mysqli_query($conn,$guideline_sql);
            while($guideline_row = mysqli_fetch_array($guideline_result)){
                $guideline_ID = $guideline_row["guideline_ID"];
            };
            $sql2="INSERT INTO project (project_name, create_at, project_start_date, project_end_date, project_present_date, project_description, guideline_ID, main_supervisor_ID, sub_supervisor_ID, proposal_ID, is_approve, reject_detail, project_grade, project_files, project_submit_date, project_submit_comment, program_ID)
		
			VALUES

			('$_POST[project_name]', '$currentDateTime' , '$_POST[start_date]', '$_POST[end_date]', '$_POST[presentation_date]', '$_POST[project_desc]', '$guideline_ID', '$supervisor_ID', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '$program_ID')";
            if (!mysqli_query($conn,$sql2)) {
                die('Error: '.mysqli_error($conn));
            }
            else{
				$project_sql = "SELECT * FROM project";
				$project_result = mysqli_query($conn,$project_sql);
				while($project_row = mysqli_fetch_array($project_result)){
                $project_ID = $project_row["project_ID"];
				}
				$sql3 = "UPDATE supervisor SET project_ID = $project_ID WHERE supervisor_ID=$supervisor_ID;";
				$sql4 = "UPDATE student SET project_ID = $project_ID WHERE program_ID=$program_ID;";
				mysqli_query($conn,$sql3);
				mysqli_query($conn,$sql4);
                echo '<script>alert("Project Added!");
                window.location.href = "project.php";
                </script>';
            }
		}
		mysqli_close($conn);
	} else{
		echo "Sorry, there was an error uploading your file.";
	}
?>