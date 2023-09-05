<?php
if(isset($_POST["edit"]) == True) {
    include("../src/action/conn.php");
    include("../session.php");

	$supervisor_ID = intval($_SESSION["id"]);
	$sql = "SELECT * FROM supervisor WHERE supervisor_ID=$supervisor_ID";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);

	$project_ID = $row['project_ID'];
	$sql2 = "SELECT * FROM project WHERE project_ID=$project_ID";
	$result2 = mysqli_query($conn,$sql2);
	$row2 = mysqli_fetch_array($result2);

	$guideline_ID=$row2['guideline_ID'];


	$sql7 = "SELECT * FROM supervisor WHERE supervisor_ID=$supervisor_ID";
	$result7 = mysqli_query($conn,$sql7);
    $row7 = mysqli_fetch_array($result7);

    $program_ID = $row7['program_ID'];

	$target_dir = "../guide_file/";
	$target_file = $target_dir . basename($_FILES["guideline_file"]["name"]);
	$currentDateTime = date('Y-m-d H:i:s');
	if (move_uploaded_file($_FILES["guideline_file"]["tmp_name"],$target_file)){
		$file_name = basename($_FILES["guideline_file"]["name"]);
	


		$sql="UPDATE guideline SET 
		guide_title = '$_POST[guildeline_title]', 
		guide_overview = '$_POST[guide_overview]',
		guide_instruction = '$_POST[guide_desc]',
        guide_file = '$target_file'
		WHERE guideline_ID=$guideline_ID";
		

		if (!mysqli_query($conn,$sql)) {
			die('Error: '.mysqli_error($conn));
		}
		else {
			$guideline_sql = "SELECT * FROM guideline";
			$guideline_result = mysqli_query($conn,$guideline_sql);
            while($guideline_row = mysqli_fetch_array($guideline_result)){
                $guideline_ID = $guideline_row["guideline_ID"];
            };
            $sql2="UPDATE project SET project_name = '$_POST[project_name]', project_start_date = '$_POST[start_date]', project_end_date = '$_POST[end_date]', project_present_date = '$_POST[presentation_date]', project_description = '$_POST[project_desc]'

			WHERE project_ID=$project_ID";
		
            if (!mysqli_query($conn,$sql2)) {
                die('Error: '.mysqli_error($conn));
            }
            else{
                echo '<script>alert("Project Added!");
                window.location.href = "project.php";
                </script>';
            }
		}
		mysqli_close($conn);
	} else{
		echo "Sorry, there was an error uploading your file.";
	}
}
else if(isset($_POST["delete"]) == True) {
    try{
        include("../src/action/conn.php");
        $id = $_POST['project_ID'];

        $sql="DELETE FROM project WHERE project_ID=$id";
        $result = mysqli_query($conn, $sql);

        if ($result){
            echo "<script> window.location.href='project.php';</script>";
            mysqli_close($conn);
        }
        else {
            echo mysqli_error($conn);
            echo "<script> alert('Failed to delete this record! Please Retry');</script>";
            mysqli_close($conn);
            }
        }
    catch(Exception $e){
            echo 'Message: ' .$e->getMessage();
    }
}
?>