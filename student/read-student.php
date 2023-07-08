<?php
	include("../src/action/conn.php");
	include("../session.php");
	$student_ID = intval($_SESSION["id"]);
	$sql = "SELECT * FROM student WHERE student_ID=$student_ID";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
	$program_ID = $row['program_ID'];
	$sql2 = "SELECT * FROM program WHERE program_ID=$program_ID";
	$result2 = mysqli_query($conn,$sql2);
	$row2 = mysqli_fetch_array($result2);
?>