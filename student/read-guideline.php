<?php
	include("../src/action/conn.php");
	include("../session.php");
	$student_ID = intval($_SESSION["id"]);
	
	$sql3 = "SELECT * FROM student WHERE student_ID=$student_ID";
	$result3 = mysqli_query($conn,$sql3);
	$row3 = mysqli_fetch_array($result3);
	
	$project_ID = $row3['project_ID'];
	
	$sql5 = "SELECT * FROM progress WHERE project_ID=$project_ID";
	$result5 = mysqli_query($conn,$sql5);
	
	$sql = "SELECT * FROM project WHERE project_ID=$project_ID";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
	
	$guideline_ID = $row['guideline_ID'];
	$sql2 = "SELECT * FROM guideline WHERE guideline_ID=$guideline_ID";
	$result2 = mysqli_query($conn,$sql2);
	$row2 = mysqli_fetch_array($result2);
	
	$proposal_ID = $row['proposal_ID'];
	$sql4 = "SELECT * FROM proposal WHERE student_ID=$student_ID";
	$result4 = mysqli_query($conn,$sql4);
	$row4 = mysqli_fetch_array($result4);
	
	$sql6 = "SELECT * FROM appointment WHERE student_ID=$student_ID";
	$result6 = mysqli_query($conn,$sql6);
	
	$supervisor_ID = $row3['supervisor_ID'];
	$sql7 = "SELECT * FROM supervisor WHERE supervisor_ID=$supervisor_ID";
	$result7 = mysqli_query($conn,$sql7);
	$row7 = mysqli_fetch_array($result7);
?>