<?php
	include("read-progress.php");
	
	$sql = "UPDATE progress SET
	progress_comment = '$_POST[progress_cmt]'

	
	WHERE progress_ID = $_POST[progress_ID];";
	
	if (mysqli_query($conn,$sql)){
		mysqli_close($conn);
		header("Location: view-progress.php");
	}
?>