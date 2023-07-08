<?php
	$count = 0;
	$target_dir = "../proposal_file/";
	$target_file = $target_dir . basename($_FILES["proposal_upload"]["name"]);
	$currentDateTime = date('Y-m-d');
	if (move_uploaded_file($_FILES["proposal_upload"]["tmp_name"],$target_file)){
		$file_name = basename($_FILES["proposal_upload"]["name"]);
	
		include("read-guideline.php");
		if($row4 == null){
			$count = 1;
			$sql="INSERT INTO proposal (proposal_name, proposal_file, proposal_comment, submit_date, is_approve, student_ID)
		
			VALUES
			
			('$_POST[proposal_name]','$target_file',null,'$currentDateTime',0,'$student_ID')";
		}
		else{
			$sql = "UPDATE proposal SET
			proposal_name = '$_POST[proposal_name]',
			proposal_file = '$target_file',
			proposal_comment = null,
			submit_date = '$currentDateTime',
			is_approve = 0
		
			WHERE student_ID = $_SESSION[id];";
		}
		if (!mysqli_query($conn,$sql)) {
			die('Error: '.mysqli_error($conn));
		}
		else {
			$proposal_sql = "SELECT * FROM proposal WHERE student_ID=$student_ID";
			$proposal_result = mysqli_query($conn,$proposal_sql);
			$proposal_row = mysqli_fetch_array($proposal_result);
			if($count == 1){
				$sql2 = "UPDATE project SET
				proposal_ID = '$proposal_row[proposal_ID]'
			
				WHERE project_ID = $project_ID;";
				
				mysqli_query($conn,$sql2);
			};
			echo '<script>alert("Proposal submitted!");
			window.location.href = "proposal.php";
			</script>';
		}
		mysqli_close($conn);
	} else{
		echo "Sorry, there was an error uploading your file.";
	}
?>