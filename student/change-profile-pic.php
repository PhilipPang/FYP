<?php
	include("../src/action/conn.php");
	include("../session.php");
	
    $image = $_FILES["pfpic"]["tmp_name"];
    $images = base64_encode(file_get_contents(addslashes($image)));
	
	$sql = "UPDATE student SET
	student_profilepic = '$images'
	
	WHERE student_ID = $_SESSION[id];";
	
	if (mysqli_query($conn,$sql)){
		mysqli_close($conn);
		header("Location: profile.php");
	}
?>