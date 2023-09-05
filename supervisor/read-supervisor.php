<?php
	include("../src/action/conn.php");
	include("../session.php");
	$supervisor_ID = $_SESSION["id"];
	$sql = "SELECT * FROM supervisor WHERE supervisor_ID=$supervisor_ID";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
	$program_ID = $row['program_ID'];
	$sql2 = "SELECT * FROM program WHERE program_ID=$program_ID";
	$result2 = mysqli_query($conn,$sql2);
	$row2 = mysqli_fetch_array($result2);
?>