<?php
	include("../src/action/conn.php");
	include("../session.php");
	$supervisor_ID = intval($_SESSION["id"]);
	$sql = "SELECT * FROM supervisor WHERE supervisor_ID=$supervisor_ID";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);


	$sql2 = "SELECT * FROM student WHERE supervisor_ID=$supervisor_ID";
	$result2 = mysqli_query($conn,$sql2);
	$row2 = mysqli_fetch_array($result2);

	$program_ID = $row2['program_ID'];
	$sql4 = "SELECT * FROM program WHERE program_ID=$program_ID";
	$result4 = mysqli_query($conn,$sql4);
	$row4 = mysqli_fetch_array($result4);
    
	if ($row['project_ID']!=null){
    $project_ID = $row['project_ID'];
	$sql3 = "SELECT * FROM project WHERE project_ID=$project_ID";
	$result3 = mysqli_query($conn,$sql3);
	$row3 = mysqli_fetch_array($result3);
	}
	else{
		$row3 = null;
	}

	
    ?>