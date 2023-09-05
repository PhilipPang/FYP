<?php
	include("../src/action/conn.php");
	include("../session.php");
	$supervisor_ID = intval($_SESSION["id"]);
	$sql = "SELECT * FROM supervisor WHERE supervisor_ID=$supervisor_ID";
	$result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

	

    $project_ID = $row['project_ID'];
	$sql3 = "SELECT * FROM project WHERE project_ID=$project_ID";
	$result3 = mysqli_query($conn,$sql3);
?>