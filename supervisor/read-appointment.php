<?php
	include("../src/action/conn.php");
	include("../session.php");
	$supervisor_ID = intval($_SESSION["id"]);
	$sql = "SELECT * FROM student WHERE supervisor_ID=$supervisor_ID";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);


	$supervisor_ID = $row['supervisor_ID'];
	$sql2 = "SELECT * FROM supervisor WHERE supervisor_ID=$supervisor_ID";
	$result2 = mysqli_query($conn,$sql2);
	$row2 = mysqli_fetch_array($result2);
	
    $sql3 = "SELECT * FROM appointment WHERE supervisor_ID=$supervisor_ID";
	$result3 = mysqli_query($conn,$sql3);
    $row3 = mysqli_fetch_array($result3);

	

    ?>